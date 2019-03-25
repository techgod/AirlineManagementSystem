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