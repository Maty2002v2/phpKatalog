<div class="container">        
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Marka</th>
                    <th>Model</th>
                    <th>Rocznik</th>
                    <th>Kolor</th>
                    <th>Rodzaj Skrzyni</th>
                    <th>Edydytuj</th>
                    <th>Usun</th>
                    <th><button class="btn btn-outline-success" id="insertButton">Dodaj auto</button></th>
                </tr>
            </thead>
            <tbody>
            
    <?php 
        include("functions/connect.php");

        $sql = "SELECT * FROM cars";
        $iter = 1;

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) 
        {
            while($row = mysqli_fetch_assoc($result))
            {?>
            <tr>
                <td><?= $iter ?></td>
                <td><?= $row['marka']; ?></td>
                <td><?= $row['model']; ?></td>
                <td><?= $row['rocznik']; ?></td>
                <td><?= $row['kolor']; ?></td>
                <td><?= $row['r_s_b']; ?></td>
                <td><span class="material-icons">edit</span></td>
                <td><span class="material-icons">delete</span></td>
            </tr>
    <?php 
        $iter++;
        };
        } else {
    ?>
            <td colspan="6"><?= "Brak danych" ?></td>
    <?php
        }

        mysqli_close($conn);
    ?>
                </tbody>
        </table>
    </div>