CREATE TABLE college
  (
    college_id NUMBER  PRIMARY KEY,
    college_name VARCHAR2( 50 ) NOT NULL,
    address VARCHAR2( 50 ) NOT NULL,
    affiliation VARCHAR2( 20 ) NOT NULL
 );
 
CREATE TABLE adminstration
  (
    admin_id NUMBER  PRIMARY KEY,
    admin_firstname VARCHAR2( 50 ) NOT NULL,
    admin_middlename VARCHAR2( 50 ) ,
    admin_lastname VARCHAR2( 50 ) NOT NULL,
--  here password is keyword so to avoid that admin_password is used  
    admin_password VARCHAR2( 50 ) NOT NULL,
    address VARCHAR2( 50 ) NOT NULL,
    mobile_number VARCHAR2( 15 ) NOT NULL,
    college_id NUMBER  NOT NULL,
    login_id NUMBER NOT NULL,
    FOREIGN KEY(college_id) REFERENCES college(college_id),
    FOREIGN KEY(login_id) REFERENCES login(login_id)


 );
 
CREATE TABLE login
  (
    login_id NUMBER  PRIMARY KEY,
    login_password VARCHAR2( 25 ) NOT NULL,
    login_firstname VARCHAR2( 25 ) NOT NULL,
    login_middlename VARCHAR2( 25 ) ,
    login_lastname VARCHAR2( 25 ) NOT NULL,
    affiliation VARCHAR2( 20 ) NOT NULL
 );
 
CREATE TABLE student
  (
    student_id NUMBER  PRIMARY KEY,
    student_batch VARCHAR2 ( 20) NOT NULL,
    student_firstname VARCHAR2( 25 ) NOT NULL,
    student_middlename VARCHAR2( 25 ) ,
    student_lastname VARCHAR2( 25 ) NOT NULL,
    student_address VARCHAR2( 25 ) NOT NULL,
    student_dateofbirth date NOT NULL,
    admin_id NUMBER  NOT NULL,
    student_mobile VARCHAR2( 15 ) NOT NULL,    
    FOREIGN KEY(admin_id) REFERENCES adminstration(admin_id),
    faculty_id NUMBER  NOT NULL,
    login_id NUMBER NOT NULL,
    FOREIGN KEY(faculty_id) REFERENCES faculty(faculty_id),
    FOREIGN KEY(login_id) REFERENCES login(login_id)
 );
 
 
CREATE TABLE event
  (
    event_id NUMBER  PRIMARY KEY,
    event_description VARCHAR2( 25 ) NOT NULL,
    event_type VARCHAR2( 25 ) ,
    event_name VARCHAR2( 25 ) ,
    event_time VARCHAR2( 25 ) ,
    admin_id NUMBER  NOT NULL,
    FOREIGN KEY(admin_id) REFERENCES adminstration(admin_id)
 );

CREATE TABLE department
  (
    department_id NUMBER  PRIMARY KEY,
    department_name VARCHAR2( 25 ) NOT NULL,
    office_phone VARCHAR2( 25 ) NOT NULL,
    admin_id NUMBER  NOT NULL,
    FOREIGN KEY(admin_id) REFERENCES adminstration(admin_id)
 );
  
CREATE TABLE faculty
  (
    faculty_id NUMBER  PRIMARY KEY,
    faculty_name VARCHAR2( 25 ) NOT NULL,
    department_id NUMBER  NOT NULL,
    FOREIGN KEY(department_id) REFERENCES department(department_id)

 );

CREATE TABLE staff
  (
    staff_id NUMBER  PRIMARY KEY,
    staff_name VARCHAR2( 25 ) NOT NULL,
    staff_address VARCHAR2( 25 ) NOT NULL,
    staff_monthly_salary VARCHAR2( 25 ) NOT NULL,
    staff_dateofbirth date,
    faculty_id NUMBER  NOT NULL,
    FOREIGN KEY(faculty_id) REFERENCES faculty(faculty_id)

 );

CREATE TABLE notice
  (
    notice_id NUMBER  PRIMARY KEY,
    notice_name VARCHAR2( 25 ) NOT NULL,
    notice_type VARCHAR2( 25 ) NOT NULL,
    notice_issue_date  date NOT NULL,
    department_id  NUMBER NOT NULL,
    FOREIGN KEY(department_id) REFERENCES department(department_id)

 );

CREATE TABLE course_details
  (
    course_id NUMBER  PRIMARY KEY,
    course_type VARCHAR2( 25 ) NOT NULL,
    course_syllabus VARCHAR2( 25 ) NOT NULL,
    course_notes VARCHAR2( 25 ) NOT NULL,
    course_book VARCHAR2( 25 ) NOT NULL,
    course_credits VARCHAR2( 25 ) NOT NULL,
    admin_id NUMBER  NOT NULL,
    student_id NUMBER NOT NULL,
    department_id NUMBER NOT NULL,
    faculty_id NUMBER NOT NULL,
    FOREIGN KEY(admin_id) REFERENCES adminstration(admin_id),
    FOREIGN KEY(student_id) REFERENCES student(student_id),
    FOREIGN KEY(department_id) REFERENCES department(department_id),
    FOREIGN KEY(faculty_id) REFERENCES faculty(faculty_id)
);
