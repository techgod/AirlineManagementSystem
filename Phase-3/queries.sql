/*Find avg salary of captain in airline*/
select avg(salary) from employee 
where designation='CAPTAIN';

/*Find details of oldest aircraft*/
select serial_no, age from airplane where age = (select max(age) from airplane);

/*Find fligths flying to bengaluru*/
select flight_no,destination,dep_time,arv_time from flights 
where destination='BLR';

/*Find total sale for a particular day*/
select sum(fare) from bookings
where booking_date ='2019-03-21';

/*Find name & designation of crew on flight PSY 808*/
select employee.name, employee.designation from crew 
join employee on employee.emp_id = crew.emp_id 
join flights on crew.flight_no = flights.flight_no 
where crew.flight_no='PSY 293';

/*Find employees working at Bengaluru*/
select employee.name ,employee.emp_id from works_at 
join employee on employee.emp_id = works_at.emp_id 
join airport on airport.code = works_at.aircode 
where works_at.aircode='BLR';

/*Find food orders associated with a particular pnr*/
select * from includes 
join food on food.sku = includes.sku 
join bookings on bookings.pnr = includes.pnr
where bookings.pnr='2HH326';

/*Find number of economy & businness class seats in the aircraft for a particular booking*/
select economy,business from flies 
join airplane on airplane.serial_no = flies.serial_no 
join bookings on bookings.flight_no = flies.flight_no
where bookings.pnr='IO2O2JI';

/*complex queries*/

/*for each category of employees that has 10 or more employees, retrieve the total number of its employees who are making more than Rs. 200,000*/
select designation,count(*) as no_of_emp_with_salary_more_than_2L
from employee
where salary>200000 and designation in 
	(select designation from employee
		group by designation having count(*)>=10)
	group by designation;

/*find most popular destination (most number of flights to the destination)*/
select destination as dest, count(*) 
as total_flights from 
flights group by 
dest order by total_flights desc limit 1;

/*find designation, avg salary and number of employees for every category of employee*/
select designation, avg(salary) as average_salary,count(*) as no_of_employees 
from employee group by designation;

/*for a particular airplane serial no, find all the destinations it flies to*/
select sno,dest from (
select airplane.serial_no as sno,flights.destination as dest from flies 
join airplane on airplane.serial_no = flies.serial_no 
join flights on flights.flight_no = flights.flight_no group by sno,dest) as air_flight_info
where sno=814;

/*show number of bookings month-wise - bar graph*/
select extract(month from booking_date) as month,count(*) 
from bookings group by extract(month from booking_date);

/*count employees for each designation - pie chart*/
select designation, count(*) as no_of_employees 
from employee group by designation;

/*total revenue for a month*/
select extract(month from booking_date) as month,sum(fare) 
from bookings group by extract(month from booking_date);
