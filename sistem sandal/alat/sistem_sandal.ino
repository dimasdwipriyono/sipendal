#include <SPI.h>
#include <MFRC522.h>

#include <ESP8266HTTPClient.h>
#include <ESP8266WiFi.h>
WiFiClient Client;

//Network SSID
const char* ssid = "Dimas Dwi Priyono";
const char* password = "";

//pengenal host (server) = IP Address komputer server
const char* host = "nursulaiman.dimasdwipr.my.id";

#define LED_PIN 15 //D8
#define BTN_PIN 5  //D1

//sediakan variabel untuk RFID
#define SDA_PIN 2  //D4
#define RST_PIN 0  //D3

MFRC522 mfrc522(SDA_PIN, RST_PIN);


void setup() {
  Serial.begin(9600);

  //setting koneksi wifi
  WiFi.hostname("NodeMCU");
  WiFi.begin(ssid, password);

  //cek koneksi wifi
  while(WiFi.status() != WL_CONNECTED)
  {
    //proses sedang mencari WiFi
    delay(500);
    Serial.print(".");
  }

  Serial.println("Wifi Connected");
  Serial.println("IP Address : ");
  Serial.println(WiFi.localIP());

  pinMode(LED_PIN, OUTPUT);
  pinMode(BTN_PIN, OUTPUT);

  SPI.begin();
  mfrc522.PCD_Init();
  Serial.println("Dekatkan kartu RFID anda");
  Serial.println();
}

void loop() {
  //baca status pin button kemudian uji
  if(digitalRead(BTN_PIN)==1)   //ditekan
  {
     Serial.println("Ok push button done");
     //nyalakan lampu LED
     digitalWrite(LED_PIN, HIGH);
     while(digitalRead(BTN_PIN)==1) ;   //menahan proses sampai tombol dilepas
     //ubah mode absensi di aplikasi web
     String getData, Link ;
     HTTPClient http ;
     //Get Data
     Link = "http://nursulaiman.dimasdwipr.my.id/ubahmode.php";
     http.begin(Client, Link);
     // HTTPClient:: begin declared with atribute error: obsolate API, use ::begin(wifiClient, url)
     int httpCode = http.GET();
     String payload = http.getString();

     Serial.println(payload);
     http.end();
  }

  //matikan lampu LED
  digitalWrite(LED_PIN, LOW);

  if(! mfrc522.PICC_IsNewCardPresent())
     return ;

  if(! mfrc522.PICC_ReadCardSerial())
     return ;

  String IDTAG = "";
  for(byte i=0; i<mfrc522.uid.size; i++)
  {
      IDTAG += mfrc522.uid.uidByte[i];
  }

  //nyalakan lampu LED
  digitalWrite(LED_PIN, HIGH);

  //kirim nomor kartu RFID untuk disimpan ke tabel tmprfid
  WiFiClient client;
  const int httpPort = 80;
  if(!client.connect(host, httpPort))
  {
     Serial.println("Koneksi gagal");
     return;
  }

  String Link;
  HTTPClient http;
  Link = "http://nursulaiman.dimasdwipr.my.id/kirimkartu.php?nokartu=" + IDTAG;
  http.begin(client, Link);

  int httpCode = http.GET();
  String payload = http.getString();
  Serial.println(payload);
  http.end();

  delay(2000);
}
