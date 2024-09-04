# moment 2 backend ramverk Av Maja Afzelius
Detta moment gick ut på att skapa ett API för att hantera ett av mina fritidsintresse, närmare bestämt spel. API:et är utformat för att kunna hantera olika aspekter av dina spel, inklusive hämtning, lagring, uppdatering och borttagning från en databas.
<br> Detta projekt är utvecklat med Laravel, ett populärt PHP-ramverk som erbjuder en rad funktioner för att skapa webbtjänster och API:er.<br>

Endpoints som används för att hantera webbtjänsten är: <br>
GET /api/games <br>
GET /api/games/{id}<br>
POST /api/games<br>
PUT /api/games/{id}<br>
DELETE /api/games/{id}<br>

Märk att {id} ersätts med det unika ID för spelet du vill interagera med. ID:et ska endast användas när du vill uppdatera eller ta bort ett befintligt spel.

