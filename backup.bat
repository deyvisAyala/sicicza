@echo off

"C:\Program Files (x86)\PostgreSQL\9.3\bin\pg_dump.exe" -h localhost -p 5432 -U postgres -F c -v -d dbsicicza -f "C:\backup\sicicza_%1backup_%date:~0,2%-%date:~3,2%-%date:~6,4%.sql"

exit