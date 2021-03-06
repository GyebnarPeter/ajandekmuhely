<?php include "header.php" ?>

<div class="container"> 
    <?php include "aside.php" ?>
    
    <main>
        <section class="cart">

           <table class="cart-sum-table">
                <thead>
                     <tr>
                        <th>Termék neve</th>
                        <th>Mennyiség</th>
                        <th>Ár</th>
                        <th>Összesen</th>
                     </tr>       
                </thead>
               <tbody>
                    <tr>
                        <td>Batman póló</td>
                        <td>4</td>
                        <td>2900 ft</td>
                        <td>11600 ft</td>
                    </tr>
               </tbody>
           </table>

           <table class="pay-options-table">
               <thead>
                   <tr>
                       <th>Szállítási mód</th>
                       <th>Fizetési mód</th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td>
                           <input type="radio" id="transport" name="transport-price" value="transport">
                           Szállítási költség (GLS futárszolgálat) 1300 ft
                       </td>
                       <td><input type="radio" id="pay-cash" name="pay-cash" value="pay-cash">
                       Fizetés utánvéttel +300 ft
                       </td>
                   </tr>
                   <tr>
                       <td></td>
                       <td><input type="radio" id="pay-transfer" name="pay-transfer" value="pay-transfer">
                        Banki átutalás 0 ft
                       </td>
                   </tr>
               </tbody>
           </table>

            <a href="./index.php">Vásárlás folytatása</a>

        </section>
    </main>
</div>

<?php include "footer.php" ?>