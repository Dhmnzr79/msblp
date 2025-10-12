@echo off
echo Проверка дублирующихся CSS классов...
echo ======================================

findstr /R "^\.[a-zA-Z][a-zA-Z0-9_-]*" style.css > temp_classes.txt

echo Найдены дублирующиеся классы:
echo.

for /f %%i in (temp_classes.txt) do (
    set class_name=%%i
    call :count_class "!class_name!"
)

del temp_classes.txt
echo.
echo Проверка завершена!
pause

:count_class
set class=%~1
set count=0
for /f %%j in ('findstr /C:"%class%" style.css ^| find /C /V ""') do set count=%%j
if %count% GTR 1 echo %class% - найдено %count% раз(а)
goto :eof
