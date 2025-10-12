@echo off
chcp 65001 >nul
echo.
echo ========================================
echo   CSS Classes Duplicate Checker
echo ========================================
echo.

echo Checking for duplicate classes...
echo.

REM Check specific problematic classes
echo Common duplicates:
findstr /C:".grid-2" style.css | find /C /V ""
findstr /C:".about-content" style.css | find /C /V ""
findstr /C:".about-image" style.css | find /C /V ""

echo.
echo Manual check commands:
echo findstr "\.your-class" style.css
echo.
echo Done! Press any key to exit...
pause >nul
