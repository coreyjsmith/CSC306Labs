CREATE TABLE "customers" 
  (
  "customer_ID" int(6),
  "customer_L_Name" varchar(100),
  "customer_F_Name" varchar(100),
  "customer_Title" varchar(3),
  "street_Address" varchar(500),
  "city_State_Zip" int(11),
  "customer_Phone" bigint(20),
  "customer_Email" varchar(100)
  );
  
INSERT INTO "customers" VALUES (000000, 'Smith', 'Corey', 'Mr', '123 S Main St', 18042, 6105552525, 'email@email.com'),
INSERT INTO "customers" VALUES (000001, 'Smith', 'Oliver', 'Mr', '800 Port Rd', 18067, 4845559922, 'woah@email.com');




CREATE TABLE "billing"
  (
  "customer_ID" int(6),
  "service" varchar(500),
  "customer_bill" int(11),
  "amt_paid" int(11),
  "bill_date" datetime,
  "date_paid" datetime
  );
  
INSERT INTO "billing" VALUES (111111, 'services', 200, 100, '2020-12-01 08:05:30', '2020-12-02 10:05:07'),
INSERT INTO "billing" VALUES (222222, 'repairs', 300, 400, '2020-12-01 08:08:08', '2020-12-02 10:10:10');
  
  