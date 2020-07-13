# aptech-sem2-project
semester 2 - project - Duong - Minh - Tuan - Quang


check db size make sure dont excess 200MB
USE this to check in sql--->> SELECT table_schema "Data Base Name",
sum( data_length + index_length ) / 1024 / 1024 "Data Base Size in MB"
FROM information_schema.TABLES GROUP BY table_schema ;