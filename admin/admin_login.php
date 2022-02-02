syntax for And operator:
select col1,col2 col3... from table_name where condition1 AND condition2 AND condition3.....;

select * from product where price > 100


order 

id    order_price   order_date   country    city   order_product 
1			2000	22/25/22	  india		kolkata	  jens
2
2
4
2
5
.............
sanu:
query:  select * from order where  city='kolkata';
query: select from order where city='kolkata' AND order_date='25/01/2022';
mosum:
query: select * from order where city='kolkata';
query: select order_product from order where city='kolkata',order_date='25/01/2022';
debayan
query: select * from order where city='kolkata';
query: ;
simanto:
query: select * from order where city='kolkata'
query: select city ,order_date from order where city='kolkata',