# medstar
Database name - medstar


1.ALTER TABLE Staff ADD FOREIGN KEY (d_id) REFERENCES department(dpt_id);
2.ALTER TABLE patient ADD FOREIGN KEY (staff_id) REFERENCES Staff(staff_id);
3.ALTER TABLE patient ADD FOREIGN KEY (d_id) REFERENCES department(dpt_id);
4.ALTER TABLE medication ADD FOREIGN KEY (p_id) REFERENCES patient(p_id);
5.ALTER TABLE medication ADD FOREIGN KEY (staff_id) REFERENCES Staff(staff_id); 
6.ALTER TABLE medication ADD FOREIGN KEY (t_id) REFERENCES pharmacy(t_id); 






patient foreign key
ALTER TABLE patient ADD FOREIGN KEY (d_id) REFERENCES department(dpt_id) ;

staff-id medication references staff(staff_id)


ALTER TABLE medication ADD FOREIGN KEY (t_id) REFERENCES pharmacy(t_id) ;
ALTER TABLE medication ADD FOREIGN KEY (t_name) REFERENCES pharmacy(t_name) ;

