CREATE TABLE lab07 (
    Names varchar(255),
    Password varchar(255),
    Email_Address varchar(255)
);

ALTER TABLE lab07
ADD PRIMARY KEY (Names);

INSERT INTO lab07 (Names, Password, Email_Address)
VALUES ('TestOne', 'test123', 'testone@gmail.com');

INSERT INTO lab07 (Names, Password, Email_Address)
VALUES ('TestTwo', 'test123', 'testtwo@gmail.com');