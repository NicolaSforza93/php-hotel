<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/40396ce4f1.js" crossorigin="anonymous"></script>
    <title>PHP Hotel</title>
</head>

<body>
    <?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    if (isset($_GET['searchPark'])) {
        $newArray = [];
        foreach ($hotels as $hotel) {
            if ($hotel['parking'] == true) {
                $newArray[] = $hotel;
            }
        }
        $hotels = $newArray;
    }
    ?>

    <!-- <ul>
        <?php
        foreach ($hotels as $hotel) {
            foreach ($hotel as $key => $value) {
        ?>
                <li>
                    <?php echo $key; ?> : <?php echo $value ?>
                </li>
        <?php
            }
        }

        ?>
    </ul> -->

    <!-- <ul>
        <?php
        for ($i = 0; $i < count($hotels); $i++) {
            foreach ($hotels[$i] as $key => $value) {
        ?>
                <li>
                    <?php echo $key; ?> : <?php echo $value ?>
                </li>
        <?php
            }
        }

        ?>
    </ul> -->
    <div class="container p-5 text-center">
        <h1 class="text-primary fw-bold text-uppercase">PHP Hotel</h1>
        <form action="" method="GET" class="mb-3 d-flex align-items-center gap-3">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="searchPark" id="searchPark">
                <label class="form-check-label" for="searchPark">Con parcheggio</label>
            </div>
            <button type="submit" class="btn btn-light btn-sm"><i class="fa-solid fa-filter"></i></button>
        </form>
        <table class="table table-bordered border-dark-subtle table-hover text-center">
            <thead class="table-primary">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($hotels as $hotel) {
                ?>
                    <tr>
                        <td><?php echo $hotel['name']; ?></td>
                        <td><?php echo $hotel['description']; ?></td>
                        <td><?php echo $hotel['parking'] ? 'Si' : 'No'; ?></td>
                        <td><?php echo $hotel['vote']; ?></td>
                        <td><?php echo $hotel['distance_to_center']; ?> km</td>
                    <tr>
                    <?php
                }
                    ?>
            </tbody>
        </table>
    </div>
</body>

</html>