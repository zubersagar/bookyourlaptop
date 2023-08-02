<% @ language="Javascript"%>

<%
var fname,email,phno,city,amt,add,msg;
fname=request.write("p1");
email=request.write("p2");
phno=request.write("p3");
city=request.write("combo");
amt=request.write("p4");
add=request.write("p5");
msg=request.write("p6");

response.write("Your Full name is.."+fname);
response.write("Your Email is.."+email);
response.write("Your Phone number is.."+phno);
response.write("Your City is.."+city);
response.write("Your Amount is.."+amt);
response.write("Your Address is.."+add);
response.write("Your Message is.."+msg);

%>