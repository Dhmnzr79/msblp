// Скрипт для проверки дублирующихся CSS классов
// Запуск: node check-duplicates.js

const fs = require('fs');
const path = require('path');

// Читаем style.css
const cssFile = path.join(__dirname, 'style.css');
const cssContent = fs.readFileSync(cssFile, 'utf8');

// Ищем все CSS классы
const classRegex = /\.([a-zA-Z][a-zA-Z0-9_-]*)/g;
const classes = [];
let match;

while ((match = classRegex.exec(cssContent)) !== null) {
    classes.push(match[1]);
}

// Группируем по именам
const classGroups = {};
classes.forEach(className => {
    if (!classGroups[className]) {
        classGroups[className] = [];
    }
    classGroups[className].push(className);
});

// Находим дубли
const duplicates = {};
Object.keys(classGroups).forEach(className => {
    if (classGroups[className].length > 1) {
        duplicates[className] = classGroups[className].length;
    }
});

// Выводим результат
if (Object.keys(duplicates).length === 0) {
    console.log('✅ Дублирующихся классов не найдено!');
} else {
    console.log('⚠️  Найдены дублирующиеся классы:');
    console.log('=====================================');
    Object.keys(duplicates).forEach(className => {
        console.log(`.${className} - найдено ${duplicates[className]} раз(а)`);
    });
}

// Статистика
console.log('\n📊 Статистика:');
console.log(`Всего классов: ${classes.length}`);
console.log(`Уникальных классов: ${Object.keys(classGroups).length}`);
console.log(`Дублирующихся: ${Object.keys(duplicates).length}`);
