GitHub :

git add .
git commit -m "message"
git push

git pull origin|main dev-...

Connect to existing branch

git checkout frontend-login

Connect to new branch

git checkout -B|-b frontend-login

git push --set-upstream origin|dev-... dev-...


PHP Server : Artisan

opstarten :
php artisan serve

cache clearen/optimaliseren
php artisan optimize

php artisan make:migration create_products_table
php artisan migrate

php artisan make:seeder UserSeeder
php artisan db:seed

Aantekeningen :

components :
layout
card
message

partials :
.banner

ALGEMEEN :
home
admin-panel

USER :
register
login
profiel
wachtwoord-vergeten

PRODUCT :
index
create
read ($id)
show
edit ($id)

PAYMENT :
Checkout

API :
Mail (Sendgrid)
- Account activeren
- Betaling

Betalen (Stripe)
