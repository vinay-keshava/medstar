# medstar
Database name - medstar


ALTER TABLE Staff ADD FOREIGN KEY (d_id) REFERENCES department(dpt_id);


patient foreign key
ALTER TABLE patient ADD FOREIGN KEY (d_id) REFERENCES department(dpt_id) ;

staff-id medication references staff(staff_id)


ALTER TABLE medication ADD FOREIGN KEY (t_id) REFERENCES pharmacy(t_id) ;
ALTER TABLE medication ADD FOREIGN KEY (t_name) REFERENCES pharmacy(t_name) ;

