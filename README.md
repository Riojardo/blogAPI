# [COGIP](https://alice-becode.funquality.be/COGIP/home-body.html)

## Table of contents
- [🛠️ Skills](#🛠️-Skills)
- [🏗️ Structures](#🏗️_Structures)
- [📜 Briefing](#📜_Briefing)
- [⏰ Time](#⏰-Time)
- [⚙️ Installation](#⚙️-Installation)
- [📚 Documentation](#📚-Documentation)
- [📸 Screenshots](#📸-Screenshots)




This __BeCode__ exercise is spread over 7 days and involves the devllopment of API routes for  __back-end__ consolidation skills.



## 🛠️ Skills


<p align="left"> <a href="https://git-scm.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/git-scm/git-scm-icon.svg" alt="git" width="40" height="40"/> </a> <a href="https://www.w3.org/html/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/> </a> <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40"/> </a> <a href="https://www.mysql.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="mysql" width="40" height="40"/> </a> <a href="https://www.php.net" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/> </a> <a href="https://tailwindcss.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg" alt="tailwind" width="40" height="40"/> </a> </p>


# 🏗️ Structures

[OOP](https://en.wikipedia.org/wiki/Object-oriented_programming), [MVC](https://developer.mozilla.org/fr/docs/Glossary/MVC)

# 📜 Briefing

## Mission

The __[COGIP](https://alice-becode.funquality.be/COGIP/home-body.html)__ is a company which we don't know a lot about apart that they produce Jean-Michel toys and that they are serious workers check. They also have incredible employees within their rank.

Jean-Christian Ranu works in accounting at the __[COGIP](https://alice-becode.funquality.be/COGIP/home-body.html)__. He has been using an old, ugly and incomplete software for years, making him go between it and excels sheet. Jean-Christian like paella, crosswords and his coworker Muriel Perrache.

Your mission here is to code a web application which will respond to the needs and desire of Jean-Christian.

*NOTE: Don't forget to add an [SQL](https://www.w3schools.com/sql/) file containing the structure in the repository, as well as, an entry within the README detailing what each person did.*

## Tech Used & Mission(s)

### Global missions (but PM responsibilities)

-   Workload distribution ✅
-   Progress management (agile methods, tool of your choice) ✅ AND ❌

### Back-end

#### Tech Used

-   <a href="https://www.php.net" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/> </a>  + <a href="https://www.mysql.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="mysql" width="40" height="40"/> </a> ✅ 
-   [OOP](https://en.wikipedia.org/wiki/Object-oriented_programming) ✅ 
-   [MVC](https://developer.mozilla.org/fr/docs/Glossary/MVC) ✅

#### Missions

-   Using composer ❌
-   <a href="https://www.php.net" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/> </a>  (POO), [MVC](https://developer.mozilla.org/fr/docs/Glossary/MVC) Structure ✅ 
-   [CRUD](https://developer.mozilla.org/fr/docs/Glossary/CRUD) ✅
-   Validation & Sanitization server-side ✅

### Front-end

#### Tech Used

-   <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40"/> </a> ✅
-   <a href="https://www.w3.org/html/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/> </a>  ✅
-   <a href="https://sass-lang.com" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/sass/sass-original.svg" alt="sass" width="40" height="40"/> </a>  ❌ + BEM ❌(or CSS framework : <a href="https://tailwindcss.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg" alt="tailwind" width="40" height="40"/> </a> ✅ || <a href="https://getbootstrap.com" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/bootstrap/bootstrap-plain-wordmark.svg" alt="bootstrap" width="40" height="40"/> </a> ❌)

#### Missions

-   Mockup compliance ✅
-   Mobile First ✅ 
-   Validation client-side ❌

## Starter ?

-   Use the starter-pack as a starting point

## Database (including Relationships)

Here are the tables you need to structure the projet
![DB-COGIP](DB-COGIP.png)


# ⏰ Time

**10 days** to complete the project.



# ⚙️ Installation 
  
* Use `PhpMyAdmin` for the DB .
* Import the file `cogip.sql` in your 'cogip' DB
* Specify your local db password in `config.php` 

```php
function connect_db() {
    $host = "localhost";
    $database = "cogip";
    $username = "root"; // Adapt with your username
    $password =""; // Adapt with your password
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
     return $pdo;
 }
```

# 📚 Documentation

<a href="https://tailwindcss.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg" alt="tailwind" width="40" height="40"/> </a>,
[UiVerse](https://uiverse.io),
[tailwindcomponents](https://tailwindcomponents.com),
[Adobe Color](https://color.adobe.com/fr/explore),
[FontAwesome](https://fontawesome.com/).

### Dashboard
You can access to the [Dashboard](https://alice-becode.funquality.be/COGIP/dashboard.html) in the __footer__!

There is a Dashboard button 


# 📸 Screenshots

## Mobile 📱


<img src="https://github.com/Riojardo/COGIP/tree/main/assets/img/ScreenShots/Mobile/mb-home-body.png" alt="mb-home-body"/> 

![mb-home-body-2](https://github.com/Riojardo/COGIP/tree/main/assets/img/ScreenShots/Mobile/mb-home-body.png)
![mb-footer](https://github.com/Riojardo/COGIP/tree/main/assets/img/ScreenShots/Mobile/mb-footer.png)
![mb-show-company](https://github.com/Riojardo/COGIP/tree/main/assets/img/ScreenShots/Mobile/mb-show-company.png) 
![mb-show-contact](https://github.com/Riojardo/COGIP/tree/main/assets/img/ScreenShots/Mobile/mb-show-contact.png)
![mb-dashboard](https://github.com/Riojardo/COGIP/tree/main/assets/img/ScreenShots/Mobile/mb-dashboard.png)
![mb-dashboard-companies](https://github.com/Riojardo/COGIP/tree/main/assets/img/ScreenShots/Mobile/mb-dashboard-companies.png) 
![mb-dashboard-contacts](https://github.com/Riojardo/COGIP/tree/main/assets/img/ScreenShots/Mobile/mb-dashboard-contacts.png) 
![mb-dashboard-invoices](https://github.com/Riojardo/COGIP/tree/main/assets/img/ScreenShots/Mobile/mb-dashboard-invoices.png) 





## DESKTOP 💻

![home-body](https://github.com/Riojardo/COGIP/tree/main/assets/img/ScreenShots/Desktop/home-body.png)
![home-body-login](https://github.com/Riojardo/COGIP/tree/main/assets/img/ScreenShots/Desktop/home-body-login.png)
![footer](https://github.com/Riojardo/COGIP/tree/main/assets/img/ScreenShots/Desktop/footer.png)
![sign-up](https://github.com/Riojardo/COGIP/tree/main/assets/img/ScreenShots/Desktop/sign-up.png)
![tabs](https://github.com/Riojardo/COGIP/tree/main/assets/img/ScreenShots/Desktop/tabs.png)
![show-company(1)](https://github.com/Riojardo/COGIP/tree/main/assets/img/ScreenShots/Desktop/show-company(1).png)
![show-company(2](https://github.com/Riojardo/COGIP/tree/main/assets/img/ScreenShots/Desktop/show-company(2).png)
![show-contact](https://github.com/Riojardo/COGIP/tree/main/assets/img/ScreenShots/Desktop/show-contact.png)
![dashboard](https://github.com/Riojardo/COGIP/tree/main/assets/img/ScreenShots/Desktop/dashboard.png)
![dashboard-companie](https://github.com/Riojardo/COGIP/tree/main/assets/img/ScreenShots/Desktop/dashboard-companies.png)
![dashboard-contacts](https://github.com/Riojardo/COGIP/tree/main/assets/img/ScreenShots/Desktop/dashboard-contacts.png)
![dashboard-invoices](https://github.com/Riojardo/COGIP/tree/main/assets/img/ScreenShots/Desktop/dashboard-invoices.png)
