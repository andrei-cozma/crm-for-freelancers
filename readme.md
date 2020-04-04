#CRM for Freelancers
Managing your backoffice activities should be as easy and quickly as possible.   
With a good CRM you would have more time for doing the money making activity. 
## About project
Taking the good stuff from complex CRMs and putting them in the simplest possible form.  
**Project is under development.**
###How to install and use

```bash
git clone https://github.com/andrei-cozma/ice-cream.git
cd ice-cream
composer install
touch database/database.sqlite
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```
Register you user at
```bash
http://127.0.0.1:8000/register
```
Contact me at [andrei@acoz.ro](mailto:andrei@acoz.ro) if you want to contribute to this project.  
![crm for freelancers](http://fakecdn.acoz.ro/861c6a641ec954b5781f6cd067c3133d32c104e68c3d0ab63705d5cf40c855bd.png)