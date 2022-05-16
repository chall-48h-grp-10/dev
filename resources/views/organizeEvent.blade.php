<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Organiser un évènement</title>
    </head>
    <body>
        <form action="/createEvent" method="post">
            <label for="eventType">Type d'évènement</label>
            <input type="radio" name="eventType" id="eventType" value="offline" checked>
            <input type="radio" name="eventType" id="eventType" value="online">
            <label for="date">Date</label>
            <input type="datetime-local" name="" id="">
            <label for="name">Name</label>
            <input type="text" name="eventName" id="name">
            <label for="details">Détails</label>
            <input type="text" name="eventDetails" id="details">
        </form>


    </body>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
    AIzaSyCH9rbAM5ekcBRvcwIbqTg78q-FnIiMI7k

