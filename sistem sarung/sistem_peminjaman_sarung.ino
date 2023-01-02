// C++ code
//
/*
  bidirectional counter
*/
#include <LiquidCrystal.h>
LiquidCrystal lcd(2, 3, 4, 5, 6, 7); //definisikan LCD 16x2 sesuai port yang digunakan

int count = 30;

int ultrasonicsensor1 = 0;

long readUltrasonicDistance(int triggerPin, int echoPin)
{
  pinMode(triggerPin, OUTPUT);  // Clear the trigger
  digitalWrite(triggerPin, LOW);
  delayMicroseconds(2);
  // Sets the trigger pin to HIGH state for 10 microseconds
  digitalWrite(triggerPin, HIGH);
  delayMicroseconds(10);
  digitalWrite(triggerPin, LOW);
  pinMode(echoPin, INPUT);
  // Reads the echo pin, and returns the sound wave travel time in microseconds
  return pulseIn(echoPin, HIGH);
}

void setup()
{
  Serial.begin(9600);
  lcd.begin(16,2); //set ukuran lcd 16x2
  lcd.print("Sarung Tersedia: "); //text yang tampil pertama di LCD
  Serial.print("Sarung Tersedia");
  pinMode(12, OUTPUT);
}

void loop()
{
  if (0.01723 * readUltrasonicDistance(9, 8) < 30) {
    count = (count + 1);
    lcd.setCursor(0, 1); //posisi kursor text diketik.
    lcd.print(count); //perintah menampilkan nilai di lcd
    Serial.println(count);
    delay(1000);
    //Serial.print("NUMBER OF PEOPLE INSIDE");
    //Serial.println(count);
  }
  if (0.01723 * readUltrasonicDistance(11, 10) < 30) {
    count = (count - 1);
    lcd.setCursor(0, 1); //posisi kursor text diketik.
    lcd.print(count); //perintah menampilkan nilai di lcd
    delay(1000);
    //Serial.print("NUMBER OF PEOPLE INSIDE");
    Serial.println(count);
  }
  //delay(0.5); // Wait for 0.5 millisecond(s)
  delay(1000); // Wait for 0.5 millisecond(s)
  //if (count > 5) {
  // tone(12, 523, 1000); // play tone 60 (C5 = 523 Hz)
  //} else {
  // noTone(12);
  //}
  
}