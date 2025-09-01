от # Cursor — единый гайд по вёрстке


---

## 0) Жёсткие правила (не нарушать)

1. **Не добавляй стили без запроса.** Никаких `:hover`, цветов, фонов, размеров, `line-height` и т.д. — только базовые типографские правила для `h2–h4` и `p`. Остальное — **только по моему заданию**.
2. **Комментарии в коде главной** — только **названия секций**. Не подписывай блоки, сетки и прочее внутри.
3. **Без тестовых файлов.** Работаем только с существующими файлами на сайте/в проекте.
4. **Не плодить классы.** По умолчанию — **контекстные селекторы** поверх базовых правил `h2–h4` и `p`. Новый класс допускается, если контекстный селектор делает код хрупким/неповторноиспользуемым (в этом случае предложи имя и обоснуй).
5. **Без дублей.** Один селектор описан в **одном месте**. Перед добавлением стилей убедись, что такого селектора ещё нет.
6. **`!important` — нельзя.** Исключения только в `@layer overrides` и по отдельному согласованию.
7. **Без костылей.** Предпочитай современные и изящные решения: Grid/Flex, `gap`, `minmax`, `clamp()`, логические свойства, container queries.

---

## 1) Архитектура и базовые правила

* Слои CSS: `@layer reset, tokens, base, utilities, components, overrides;`
* Специфичность: максимум **0‑2‑0**. При необходимости понижай через `:where()`.
* Адаптив: приоритет — **container queries**; media‑запросы только там, где CQ не хватает.
* Типографика по умолчанию (разрешено всегда):

```css
@layer base {
  h2 { font-size: clamp(32px, 5vw, 64px); line-height: 1; }
  h3 { font-size: clamp(18px, 2vw, 24px); line-height: 1.3; }
  h4 { font-size: clamp(18px, 2.2vw, 22px); line-height: 1.3; }
  p  { font-size: clamp(16px, 1.2vw, 18px); line-height: 1.6; margin-block: .75em }
}

@layer utilities {
  .container { container-type: inline-size; inline-size: min(100%, 72rem); margin-inline: auto; padding-inline: var(--space-4); }
}
```

---

## 2) Процесс

1. **Бриф** (см. §4).
2. **Черновик**: HTML+CSS в существующие файлы, без «украшательств».
3. **Автопроверка**: Stylelint + Prettier.
4. **Рефактор** по чек‑листу (§3) и DIFF правок.
5. **Подтверждение** → только затем стили состояний/цвета/фоны отдельной задачей.

---

## 3) Чек‑лист элегантности

* [ ] Нет новых классов без причины; использованы контекстные селекторы
* [ ] Нет дублей селекторов/деклараций в файле
* [ ] Специфичность ≤ 0‑2‑0, нет id‑селекторов
* [ ] Нет `!important`
* [ ] Нет фиксированных высот/костылей; сетка на Grid/Flex
* [ ] Адаптив через container queries там, где возможно
* [ ] Комментарии на главной — только названия секций

---

## 4) Шаблон брифа задачи (копируйте в тикет/чат)

```
Секция/блок: [название]
Цель: [какую задачу решаем]
Контент: [заголовки/абзацы/кнопки/иконки]
Сетка/структура: [DOM/колонки/ряды]
Допущения: [что можно, а что нельзя]
Запрещено: [повторить ключевые запреты из §1 + ваши доп. ограничения]
Выход: HTML+CSS в текущие файлы. Без новых классов (по возможности) — использовать контекстные селекторы. Без hover/цветов/фонов, если не указано.
```

---

## 5) Готовые промпты для Cursor

### A) «Сверстай без украшений»

```
Ты — Senior Frontend. Сверстай секцию по брифу ниже, строго соблюдая «Жёсткие правила» (§0) и «Чек‑лист» (§3) из style‑guide.
Требования:
1) Меняем ТОЛЬКО существующие файлы проекта, без тестовых файлов.
2) Не добавляй стили от себя (hover, цвета, фоны, размеры, line-height) — кроме базовых правил для h2–h4 и p.
3) Не создавай новые классы, используй контекстные селекторы. Если без нового класса не обойтись — предложи 1 вариант и обоснуй.
4) Никаких дублей, `!important`, id‑селекторов.
5) Вывод: код + краткий self‑review по чек‑листу.
[ВСТАВИТЬ БРИФ]
```

### B) «Рефактор после черновика»

```
Рефакторни CSS:
- Удали дубли, упорядочь свойства: layout → box → typography → visual → states.
- Снизь специфичность через :where(), убери id и !important.
- Где классы избыточны — замени на контекстные селекторы.
- Убери костыли, используй Grid/Flex, gap, minmax, clamp, логические свойства.
Вывод: DIFF + список изменений с обоснованием (почему стало проще/чище).
```

### C) «Проверка и замечания»

```
Проверь текущий CSS и перечисли TOP‑5 мест для упрощения/обобщения. Дай точечные правки (минимум кода) и поясни, что улучшилось: специфичность, повторы, адаптив.
```

---

## 6) Мини‑база (подключается один раз; не править без задания)

```css
/* base.css */
@layer reset, tokens, base, utilities, components, overrides;

@layer reset {
  *,*::before,*::after { box-sizing: border-box; }
  body { margin: 0; min-block-size: 100dvh; text-rendering: optimizeLegibility; }
}

@layer tokens {
  :root {
    --space-1: .25rem; --space-2: .5rem; --space-3: 1rem; --space-4: 1.5rem;
  }
}

@layer base {
  h2 { font-size: clamp(32px, 5vw, 64px); line-height: 1; }
  h3 { font-size: clamp(18px, 2vw, 24px); line-height: 1.3; }
  h4 { font-size: clamp(18px, 2.2vw, 22px); line-height: 1.3; }
  p  { font-size: clamp(16px, 1.2vw, 18px); line-height: 1.6; margin-block: .75em }
}

@layer utilities {
  .container { container-type: inline-size; inline-size: min(100%, 72rem); margin-inline: auto; padding-inline: var(--space-4); }
}
```

---

## 7) Автопроверки (Stylelint + Prettier)

**.stylelintrc.json**

```json
{
  "extends": ["stylelint-config-standard", "stylelint-config-clean-order"],
  "plugins": ["stylelint-order", "stylelint-declaration-strict-value"],
  "rules": {
    "selector-max-id": 0,
    "selector-max-specificity": "0,2,0",
    "declaration-no-important": true,
    "no-duplicate-selectors": true,
    "declaration-block-no-duplicate-properties": [true, {"ignore": ["consecutive-duplicates-with-different-values"]}],
    "scale-unlimited/declaration-strict-value": [["color", "font-size", "z-index", "line-height"], {"ignoreValues": ["inherit", "unset", "initial", "var"]}],
    "comment-word-disallowed-list": [["TODO", "FIXME"], {"severity": "warning"}]
  }
}
```

**package.json (скрипты)**

```json
{
  "scripts": {
    "lint:css": "stylelint \"**/*.{css,scss}\"",
    "fix:css": "stylelint \"**/*.{css,scss}\" --fix",
    "format": "prettier -w ."
  }
}
```

**.husky/pre-commit**

```bash
#!/usr/bin/env bash
npm run fix:css && npm run format
```

> Любая правка проходит авто‑чинку → меньше дублей и ниже специфичность ещё до ревью.

---

## 8) Паттерны контекстных селекторов (шпаргалка)

```css
/* Заголовок и первый абзац в карточке */
.card :where(h3){ margin-block: 0 .5em }
.card :where(p:first-of-type){ margin-block-start: 0 }

/* Описание сразу после заголовка секции */
section.features > h2 + p { max-inline-size: 60ch }

/* Кнопка внутри баннера */
.banner :where(a[role="button"]) { inline-size: fit-content }

/* Список преимуществ в секции тарифов */
.pricing :where(ul){ display: grid; gap: .5rem }
```

---

## 9) Исключения (по согласованию)

* Если контекстный селектор делает код хрупким/нечитабельным, допускается ввести **один** новый класс‑хук (например, `.feature-grid`). Нужно обосновать и предложить имя.
* В `@layer overrides` разрешён точечный `!important` для служебных баннеров/AB‑тестов.

---

## 10) Как и когда добавлять «украшательства»

После принятия разметки отдельной задачей: «Добавь стили состояний/цвета/фоны по списку: …». Это не конфликтует с правилом «не добавляй стили без запроса».
