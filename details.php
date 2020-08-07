<?php include "header.php" ?>

<div class="container"> 
    <?php include "aside.php" ?>
    
    <main>
        <section class="details">

            <h1>Sötét lovag - Batman póló</h1>

            <div class="tshirt-data">

                <div class="tshirt-image">
                    <img src="./img/batman.jpg" alt="batman">
                </div>

                <div class="tshirt-details">
                    <table>
                        <tr>
                            <td>Cikkszám</td>
                            <td>494</td>
                        </tr>
                        <tr>
                            <td>Póló típusa</td>
                            <td>
                                <select name="type" id="tshirt-type">
                                    <option value="male">Férfi (unisex)</option>
                                    <option value="female">Női (karcsúsított)</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Póló mérete</td>
                            <td>
                                <select name="size" id="tshirt-size">
                                    <option value="s">S</option>
                                    <option value="m">M</option>
                                    <option value="l">L</option>
                                    <option value="xl">XL</option>
                                    <option value="xxl">XXL</option>
                                </select> 
                            </td>
                        </tr>
                        <tr>
                            <td>Póló színe</td>
                            <td>
                            <select name="color" id="tshirt-color">
                                    <option value="black">Fekete</option>
                                </select> 
                            </td>
                        </tr>
                        <tr>
                            <td>Ár</td>
                            <td>2900 ft</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" name="quantity" id="quantity"> db
                            </td>
                            <td>
                                <button>Kosárba rakom</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="size-table">
                <img src="./img/merettablazatok.jpg" alt="méret tábla">
            </div>

            <div class="specification">
                <h3>Részletes leírás</h3>
                <div class="specification-details">
                    <p><strong>Sötét lovag - Batman póló</strong></p>
                    <p>Anyaga: 100%-os pamutpóló (Gildan)</p>
                    <p>Mérete: S - XXL</p>
                    <p>Gyártási technika: vasalható fólia</p>
                    <p><strong>Tökéletes ajándék szülinapra, névnapra, karácsonyra, stb.</strong></p>
                    <p>A pólót ajánlott 40 fokon kifordítva mosni.</p>
                    <p>Elkészítési idő minimum 3 munkanap, karácsony közeledtével ez az idő növekedhet.</p>
                </div>
            </div>

        </section>
    </main>
</div>

<?php include "footer.php" ?>