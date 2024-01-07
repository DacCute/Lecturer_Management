LOAD DATA INFILE '../Data/Lecturer'
INTO TABLE items
FIELDS TERMINATED BY ',' ENCLOSED BY '"'
LINES TERMINATED BY 'n'
IGNORE 1 ROWS
(item_name,@manufacturing_date,cost)
SET manufacturing_date = STR_TO_DATE(@manufacturing_date, '%m/%d/%Y');