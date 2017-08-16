Temperature Humidity DBMS Project

Project Temperature and humidity base on ESP8266, DHT22, firebase, MySQL
โปรเจ็ควิชา Database ตรวจวัดอุณหภูมิและความชื้นโดยใช้ NodeMCU (ESP-8266) และส่งข้อมูลเข้า Firebase และ MySQL
ESP8266

อุปกรณ์

บอร์ด ESP-8266 (โมดูล WiFi ที่มีความพิเศษตรงที่สามารถเขียนโปรแกรมลงไปได้)
เซ็นเซอร์ DHT22 (เซนเซอร์วัด อุณหภูมิ+ความชื้น)
สายไฟ (ใช้เชื่อมต่ออุปกรณ์)
มิเตอร์พัดลม 
Relay

Library

ESP8266WiFi.h
DHT.h
ESP8266WiFiMulti.h
ESP8266HTTPClient.h

การใช้งาน

- ต่อขา 1 ของ DHT22 เข้าที่ขา 3V ของ ESP-8266
- ต่อขา 4 ของ DHT22 เข้าที่ขา G ของ ESP-8266
- ต่อขา 2 ของ DHT22 เข้าที่ขา D5 ของ ESP-8266

- ต่อขา Relay เข้าที่ขา D7 ของ ESP-8266
- ต่อขา Relay เข้าที่ขา G ของ ESP-8266

- ต่อขา Vcc  ของ Relay เข้าที่ขา Vcc ของมอเตอร์พัดลม
- ต่อขา G  ของ Battery เข้าที่ขา G ของมอเตอร์พัดลม
- ต่อขา Vcc  ของ Battery เข้าที่ขา Relay 

- ต่อขา D0 ของ ESP-8266 เข้าที่ขา RST ของ ESP-8266

- บรรทัดที่ 9, 10 ของไฟล์ esp8266-source.ino แก้ไขเป็นชื่อและรหัสผ่านของ Wi-Fi
- บรรทัดที่ 19 ของไฟล์ esp8266-source.ino แก้ไขเป็น figger print ของเว็บไซต์ (ในกรณีใช้งาน https)
- บรรทัดที่ 50 ของไฟล์ esp8266-source.ino แก้ไขเป็น url ของเว็บไซต์ที่ใช้งาน
- บรรทัดที่ 52-58 ของไฟล์ esp8266-source.ino เป็นเงื่อนไขโจทย์พิเศษ (ความคิดสร้างสรรค์)

รูปภาพวงจร
![](https://github.com/cheasel/DBMS_miniproject-rmutl/blob/master/121.jpg?raw=true)
![](https://github.com/cheasel/DBMS_miniproject-rmutl/blob/master/20706799_2014026622160639_1055994965_n.jpg?raw=true)
![](https://github.com/cheasel/DBMS_miniproject-rmutl/blob/master/20706830_2014026612160640_675352081_n.jpg?raw=true)

WEB-SERVER

ความต้องการระบบ

PHP Version 5.6+
MySQL or MariaDB
Firebase

การใช้งาน

- บรรทัดที่ 5-8 ของไฟล์ mysqli.class.php แก้ไขเป็นข้อมูล Database ที่ต้องการใช้งาน
- บรรทัดที่ 8-11 ของไฟล์ insert.php แก้ไขเป็นข้อมูล Database ที่ต้องการใช้งาน
- บรรทัดที่ 13 ของไฟล์ insert.php แก้ไขเป็นจำนวนข้อมูลที่ต้องการเก็บ
- บรรทัดที่ 15 ของไฟล์ insert.php แก้ไขเป็นข้อมูล Url ของ Firebase ที่ต้องการใช้งาน

รูปภาพตัวอย่าง

![](https://github.com/cheasel/DBMS_miniproject-rmutl/blob/master/111.jpg?raw=true)

จัดทำโดย

![](https://github.com/cheasel/DBMS_miniproject-rmutl/blob/master/20750608_2014026365493998_1907302142_n.jpg?raw=true)

- Noppadol  Lanngein  58543206016-8
- Willy  Brickly 58543206025-9
- Somrutai  Kongsri 58543206028-3
- Sutisa Penwijit 58543206031-7
- Surasit  Wattanamesuk  58543206032-5

alt วงจร esp8266
