<?php 
session_start();

require "./config.php";


        if (isset($_POST['messgPost'])) {
            $msg = $_POST['msg'];
            

                require "./getId.php";
                if ($row = mysqli_fetch_assoc($result)) {
                    $id_user = $row['id_user'] ;
                    $sql = "INSERT INTO message (cnt_messg, mess_user)"." VALUES ('$msg', '$id_user')";
                    $result = $conn->query($sql);
                }
                
        

        } 

        ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Document</title>
    <style>
        <?php include "./assets/css/style.css"; ?>
    </style>
</head>
    <body>
        <?php include "./layout/Header.php"; ?>
        <div  class="container mt-4">
            <div class="row">
                <div class="ChatFriend col-4">
                    <div  class="square">
                        <div style="background-color: #000b43;" class="head p-1 text-center text-white">Inbox (0)</div>
                        <div style="height:17rem;" class="bd bg-light">
                            <div class="section mb-2">
                                <img class=" rounded-circle" height="30px" width="30px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQntcG6CAUc5OzJVrM7nZktiZPaxkrqsYSyQJ_eN5ok_tU-LaW9z_NUkSZxl2q_FnmzbP8&usqp=CAU" alt="">
                                <span style="font-size: 12px;" >Elon Taylor</span>
                            </div>
                            <div class="section mb-2">
                                <img class=" rounded-circle" height="30px" width="30px" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUWFRgVFhYZGBgYHBoZGBoZHBoZGRgaGhoZGhgcGhocIS4lHB4rHxoaJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISHzQrJCsxNDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDE0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAFAAIDBAYBBwj/xABBEAACAQIEAwUGAwYFAwUBAAABAhEAAwQSITEFQVEGImFxgRMykaHB8EJSsQcUI2LR4RUWcpKyM4LxJDRzouJT/8QAGQEAAwEBAQAAAAAAAAAAAAAAAAECAwQF/8QAJBEAAgIDAAMAAgIDAAAAAAAAAAECERIhMQNBUSIyYXEEE7H/2gAMAwEAAhEDEQA/APZqVKlQBylXaVAHIqP2YmdfKTHwqSlQAopV2lQBylXaVAHKVdpUANLDrXaayg7iadQAqVKlQAqVKlQAqVKuZtYoA7SpUqAFSpUqAFXa5SoA7SpUqAFSpUqAFSrlKgDtKuUqAO0q5SoA7SrlKgDtcpVWu4RWkwQTEkEg6ba0gJ2IGprK8a7RNZZHWGRpAH5o94HSVI+xQbjOExNgkJfYqwLMoYqQpaS089NBzEdNKy9/G3BMd8MWLLcCFV6ECSDrsYEml0fD0n/NthrTuGKkAhQRrMaHymspZ4ribjAIzMQCwOcxIktqWAGg51j/AGzIYaRMabkdNvXymojeIkAkiZO5Bg6etXiTZ6g3a0syezjMAS6EESY8dev0JonwztPZuABiFb1gz56ivKbGMClHRO8O6wkwWgjST0OvKDFHbFqwEF0uxnMSkhAvcJXKMxZgWBHLloJpNUNOz1maqYjiNpPedR4bkeYG1eTf5nuZApYtHpvHx1Gg2qinHnBJVjJHeO5I8Z8/ny1ophaPbVvqVDBhlIzTOkbz5Vw4lO93h3fe/l868Xbj+JaMlwzlVTlGWFGwzLuepjUgdBWi7N9m7+IVbl66y2jJABhm5qekSzGTrv1o2Gj0T98SYzLPQGSdJmBy8as0KwPB7NgE20GYSRJLGcsTmbWSBqfPrVxMWpMCeWpVgNdtSInwpAWaVKlTAVcM12lQAq7SpUAcpV2lQBVXHWzs6/GpVuqdmB8iDXmz4hwaVrGurZgYqnFkKR6WzAakwKdWBvcSuOsE6UsPjrqaZ2jkJOlJRY8kb6lWKXjV0H3zHoatJx9/zA+goxYZI1dNZgNzHnQyxj2ZQ0AztuNeh++dY3jlrH3Lbs+Js2wGPcViqhBvL5JzjXTXYVFmiizacQ4iqCBetI3LOZ320BB161je0naa9bJ9niLbLMdxYMae8SCC240I2mOQwuLAzZhf9qYEkIV6ab6weZ8DQvEX82mwHL/x6U0rE3QS4j2kxF4y7zpA2nLroevrQxuIPO9UnMbVEHJNWkQ2FkxkiDqDvy8vKnre23PKJ0jp5VzhnArt2IEDrWlwfY9hBZwOvOmCTM4LnKNzM/P7H6VxngRMRMnn1kdD/atk3Z1Ng4H/AG/etQYnsq/4CjD/AGnzEz+tAYsxr3SFj79elQveI218Z/SjPEeAXEPeRgo3Yajx22oHdtsDrp+hoE00T4XFlDPP5+laWz2jxLjIjMCAqhs7KFiRyMa93UnSOkRkUusugMDnGk89eokCrOGxMbzrvBifOk0NM9H4Lftu3/rcSzMRlCB2KQdYZ1kbaaHXMa9KsqoVQvugADmIjTXnXieG7TWlXL+62TpGdpLcyd5HM6RpRrgn7QhZBtvbzID3crAZZ1IEjVd/vaaKs9XpVnMB20wVzKBeCs+yv3SDtBPuj40dtYhGnKytG8EGPONqAJqVKlQB2lSpUAKlSpUAeXPfBqIsJqM0hWlmVBKziVAil7YE0PFKKMgoIuVO1W1S3aTO5jmDqSddFVR7xJgaDn0oThrhXMVCs5VggckJm/DmjWJ++YluWbdt0vuxv4g6IGJyKTOZ1WIRQRHgBvvWc5ejWEfZbxPGCnvDIu687hUHWUiFB5SfONYA4riYA7wAzbghQe8VMmNzvy1kGAaF8Vx6oXIcuwkO7bsxPuqBoo+gHSqGDYdzE4j3CxyIBOcr7pYckDddSddRUKPstyd0T8feQiKAubWBuOYzc9jPqKBYgZe7Mnr9au4zFTLuYZ5MxsNTAHU/Vdah4dwW9iDlRCTz6L0k/TerjpES2wVlJMDU+Fans92fkh3HkK1PDexqYdMzwz/iPIfyr/WpjC6CnlYKNdLNoogAHwFNu48cjQ3EXGOw+VVXLePpHpQ5FJBF8QCd/wBfpVzDYw6CgtptdanTwnqI6gffyrNyZpijRWnD+tDOMdlLdxWKAK5100BPiPrvTbLMIO5Hxo7hMVIE/wB/7U1OyHE8U4tw+5Yco6xGgPWqYNe09p+ApibTaAOBKnx3g+Brx7HYF7TlXQqeh/UHnWikZONDVcDfXyNXk4oAQXto6wVysApiZBzIFIYa97x8BQ63J0AJ5ab+EVbXhblspOVuh6+NDoSv0G8Hc4feQpcz4V80q6BryZcsQ+Zs5M/oNa1/Ynh9mxfm3xC04Ij2YBVmUyQO82kGOR25VkV7DYmYzWyIBBlhII8v7eNR4zsjjEGYKrjojd7/AGkD5VLopX8Pfs46j406vE+ynGcSl1MNdVyjzlV5zJAOonvKBG3wrRXcc9pyAx32JO3KhJvQN1s9Jrs1iF7ROF51xeMvOYMQelPFhkjc0qxX+Y7v5v8A6ilTxYskZiacutR1NbFDEi7gsEzmFEmrWM4O6AFlMfWj3ZPLlbbNp5xRvElQveIA6nkaxcnTdmlLhg8WBhrJdlV3YKEXTM7Psn8wmDprp5Vn+JYfEJa77l8RdeDkgZFKzkUjYaAaaCW9dHjsEfatcuIC4OTDoBJS2mcZydg7EzPLz2AdqcQli2jFn9syMiQdF78s42IJ0XfUDlUxblsvSVGQ4sgNwWwxOQEOxBiVBLGJ8/OiT2g4srIGVFLLoSoYysxpqCOm3KaC23HvsJV3AZpA7oMuI5Tp8DR/ixyuSokHMXbqRKiY31I/2itH8JX0G3Xa/eW2vugwN9gYBg+HWvZ+z/DUsWURQNpJ0kmNZryrsjhQxdyPxaHyH/6r1HAXGKRr4TQ36BL2QcVxAgjx8J9KABJ3NE+LBEEuwAA0HMk+fL51mb/GUGmVug1EUIboIygPU/fOl3ToB+lAP8WtanNrvSHGVWYIjw5evWh2ONMNPh+YFS2E6ifv5UL4VxIukTBcPl8DJy/SoeG8eVtH7raj1HL6VBZqrCr1j751byRqPs1nTjkKhs4B89as4Hitr3faQen0pK/gOvposPc5GhnH+AJiEKka7qw3RuoP0qxbfMMyGRz8KJYXXfy9YrRGbPCcfbexcKnRgSDHXqKdb4vBGYSJ1PPXejf7SsJkxIaIDgn5/rWXwuHLkKOfrWi2jJ6Z6JwTtEEKWnUezeMj7ZJ2B8J5cvlRvH33DTsJP2DXmAk2ipn+EzKY202n/wC32a0fZ/j6PaFm+WUrOV9xl0jMNTptSWhvZojjpgkKWGgciXg/lPLSq7XQZJ1P3M9aiuWisaggiVYahgdiKZWiS6jNt8ZdN9dqkF1YobT1NUSXswpVUmlQBGKmQ1EVrorM0CeEx7IZUxUuN4u7iGaaEzTGNZvxxbsrJhPCYlnKqTKryM7kiJEa6AgD9Kwva7FXr+KyMnfB9miLB0LHINOZmSf0A02XDroBgwDtOo0O46bTqdflVB+Gj96fEBszMCEEagtpm8go38ZqeM0W0ZntDwn2KW1E5gxXQzr3WzD18q5xDGiMs6QBpsR/Sf0o92tuBEVWJLDRRsGeTJk65RI15kTtWDv4pn1YyQAPQbVUVZMnRuex9uUEfiY7TtMfSt/++LbUltgNh8qx/wCzWzmtljrE/In+tEOM4oI0toBJ842rOXTWKuJDjwpJu3m1bUKTr/asbxXFrPdSB46VPi+LF3Lsrt0VZCjpncax/KIFZ/HY1mYgqqAclUAfHn51UUyJNehjvrppTJM00jQHSTy5ijvZnhBvOGYHIp+J6CtG6RKVsMcD4Zcyo+w6c4+lZ7j+De1fdDoCSynkVYkyPnXrWGwwVQoERQ/tZwBcRY7v/VQFkPU81PgdvODyrLjs1auNHk9vEMuzGjPC8ehYZyRPMDT1oAqkmI16HSOu9TYHG5Gk20cdGn5EGR6VclaM00mep8JggezcmCCZMkgCAK1HDMUrpI0OxHQ15lwTHhXBSUfT+DcaQ88rd1vx9FffaRvW24RiFZ86TDwSNobnI/CddvPpUK10t0+GS/awkG00c2Hy/tWJ4a6ZtyG5V6P+1m0DZU/kdT6NK15WiwQfGtlwwlpmt4IAuMKbrcWRpzCmd/FSaIYns7h83cLW9IMSw1G4DSZnxoXibgtXMPcGygEt1MjMp9J+NarGpDdQwDDyOoqV0pukO4Fw05LeGV87ZmYuRlALHUASYUAT4zWqxHZJQhKuSwEwRoY5eFZzguP9jcDxMaEdQdDWg4j2sVkK21IJEZmjSd4AqXadK/4C09syDiDTkNMd5pZq6EYslzClUOauUxBDF2sjsh3UkH0qCj3GcJN9z1afjFVlwVYxejVrYJHlTvZk8qMLhBU4wojaqEZtkI5VfwWHXKXecoBJOsqFBn1/rvRE4QGgnbC6y2kwttWa5iDACwNAeZ10kjppOoqJPRUFswvG2e8z4kz7PPkSfUwI2gR8aCFq0HH7TW1tYRe9kBJI2d3OZyPAbelDcDw5nuKmxZgvTcgHU04vQSVs9H/ZG2e3dXmrR8RNHsTwpbjsXXMAYAp37PuAphUu5Hz52WTuBlB0EDxnnRjFbkLp1P3zrKW3ZrC0qZiOP4dgsIyqBpAjbzHhWIxWAcn7/oK9Ox6oNSZPMn4+lZPieJUHQCddBVLRTVmewnBix7xAHPrW8wKphLYZxEDurz15kdazPDr+Vw7x3e8q9SNV+cUA41xa7dcnMdaHbYaSNli+1LM0gkKdvsUR4P2qUQjKGBO86ivMrdx4GY60y9irit3Rp13pOLb6NTVbRsO2PZsi816yAUud8DbU+9B233B+tZyxw982qaj+UN5VquzPGnew9txmyFXX45W+RPw8KPJbRxmifQT/AOazc2tDwT2C+zmAT3b1hHVtCGQGPKRIPiK1+A4ctt5Scp5HU0Msvk2EitHw26HAoi2+ikq4Yj9rNyLYX82T4hmP0ry1SY20HPpXqP7Y7B/gN+CSGPIGDlk+Mn4VgbL2vYMsd+V5Ays94gnb+4rojpHNLbLmIBe2iE95FUgkbiNT1iPPYmtrYR3sI9yM4VSCikSpAy5pO++oofb4BdxNsLbTK9tgAQcudGU59WOnL4RWm7L8LbEYRGJUlWdEcEwyIxUFdNtI1japvZXqgDmprNWlxnZW6qlhlaNYBM/MVmmGsVcWmQ0xqingUR4fwa7dEopI66AfE03H8Ju2RLoQDz0I+Iq1JEYsH0qU0qoKN5xOw2diRufpVMLWj4jligMVklotvZGFqQkRXKhxB0NMVnP3lQ0aUI4Fwy6rvicS6vefRQslbVuZyJy5DboN9SWWXGfvGjKX0603GwU2tGE4pw0vxTI7lcykqeYOQwF6wZ08DU+H7JujuzsHRUdg0wxcjSV5dd60z4VTi1vnLlFsrJPezzAyjYDJMny8aJNcQgjQiDI8IM1Cjp2VltFXskjWMIiMxL+886kMwUlZ30mPSpcXxPIskjXmOZ5xJ+4qj2TxHtbNw8xdafVUj9PlQ3tO5A02k1znVWyhj+J5jv8A2qGxhc4zNoKA4m642EnlU4xrgIhIz842BPL9K1RDYZu2086A4vCW1JZUnmdyBRJsaiCEys34rj+6PBV5+ZoZieLydXZ/kPQDQUyQS7hjAj0q9geEs51cIvjqfRR9TT/8Yfn8dCR01OsVbwnG+ROv8wVlPodvSplfopJGr4Nwi3bTKhzE6ljALHlMcug/vRN8OE1G3OguA4ijkLIRz7sGbbHoJ1Q+c1bxOPKW3JElBqBvuAT85rOt7LuidoajfBnIIHl9/Wslw/GBiZ2NaThzjTqD/T6j9KcRS4U/2j8TNtEAAJY8xKwuuvKDtHOazR4OyJec4craxSWntBWyhWY2yBzOUO+gaBoK1fE0XEP+5OB/ERGzR3ly3VOh5DKrVou1HDDds2raIDlvWDt7iJcUuR07qkfKrvplJJJEfZfCpbNxEnQ7EkxJ5E6kHWD59KPYewqKFRQqiYVQABJk6DxJPrVDg+FZGuM34iI8hm/rRSqSJ6ccwCegryK6upr1nFHuP/pb9DXmTWJqktibo33ZtYw1rxWfUkml2mUHDuD/AC/8hVnhCRYtDoif8RVXtMf/AE7ea/8AIVL4Mwf7kKVT5zSp7FaCT8WZtDNPt4oGhygTrXb7jkK1oyC4cVx7ciggxLCphjzFFBY5+HAmaZ/hxHOurjjTlx9OgK97CkczV7hmAbOhb3SYM7EEEa+GtRYosyyBtRCy7m0SohoOWfzRp86mXNDj0h4S6Z7oUAZsrwICgd4AADQQIFZztIQWJ03Mc/Mjwq9wWzeF93dWChDMiBLGYXrqOWnyoLxm5JJ9flXLTXTsTT4C1VQQTQ7G8Oz3A6tCkjNGhHlUz3dasW00n5VaZLVkmF4JhpBuXCw/KxgfEU7ia4cEKttAu0qB6aiqGKYkHlQa4GGxNUCeIeGEwpjuNPOHYD4fCrdvgOFcQDdU/hIIbroQZnltE67aVkluuOdWbWNuTGdvQxUuL9MvOLW0HX7KYhfcuI4n8RZCOh0DVYwC4gOy3TJggxMHSNyBP96qcOxrgjU+pmjJuNoxqHJ8YsfZVwCZTHSR6VseEprNZPDOM89a0iYv2Vh7saokgdWIAUerZaEDCnAMMjYq5fLaockcgCCqkHlsdPGte2IUfiHxFeacC4i3syWXVwJYEASA0aeBaDrz8qsPjHHOtPErRj5ZNM9EW+p/EPjT84615sMe/WnjiL9a1xMsz0HEuApk7gj41huIYYLJHWmYfiDkwTpRd7YdYpNUx3aDnC8Yj20ysNFAIkSCBERVPtRcmzkXVmI25AGayeMwjIZHpVnAcXXZ9D97UYhl6KP7nc6Vyj3+Jp4V2qpkgillFPrkVpRI3IK4bdSilFICH2Yrht1MRXIp0Ky9w+4D3TRV/dgVnUYqZFH8FeDiolGi0yqtszWB4kpDMhGqsQfp9a9Zw1ledZDt5wkKRiEEzo4Hh+IfX49ax8ivZp4pVo80uLDVdRu7UWJUTIp9lxEVBunsl9kGFUMXhQKvNcjnQzF4ok00waOYfhwY95oHQQT/AEFHLHBrYHd8551nUxJFFcDxE7TUSyKjiXzhYMDcfH7/AKir10fwvGIqPCkNHOrd+Pd0gf1qUOTBeEQjU1p7BPslGxY5zHTYfWh3D8B7a4EGi7sfQkgeMTR3EYQq08voNAK28UbdmHklqiituNgB5U5kEfelTxXMtdOJz2VjbpkVcIqB0oERKYq3hsaynU6VWy1yKMbCzS2nV1oNxPhcagVFhr5Q6Ufw19XXWppoq7Mh+7NSrYfuCdKVFioEFKRSnTSrQkaop0Uq7FAjkVwiu0qBjYqTC3yjeFMiuUUKzRpcLDQ0O42jex1JkMY+A/vUeAxUHKfSpe0lyLIPWT8/7Vh5VSNvFuR5RxJocwAD8jVFMVG+lEcchkzv+tCbtuayRu0WLmIkVRfU010YVC148xTSE2TxU1lDOhqmMR4VZw95iYAFDQJmn4a5Vd/CelWRiF2mSdPvpQb2NyASeU9APKp8HbMg/wBPrWbpFqLZvez8IpcgDYDzYyf0o5eyuKBohNhcoJluh5D+9QF7qnY/CunxR/Gzm8r/ACLuIw+U1BFFMMS66qfWqeIw+U1omZlUikVmn0oqhWVnSmZatkVE6UAQRU+FuFWEcyBURpA86KA0/rSoD+/P1pUqCySuTUt+yVJFRZaoQqU13LXStAHKVKKQoA5SNdA+/GmrftBgr3kSTl7zDMW/KqAyW8KTaXRpNukdFSdp7n8NFO4VZ84k1Iz2na1aXRbrRrqzogztmPKQNhtVDtbe77D4eFcvknlw6/H4nF76YXGnWhzn1oliV1oXiNKlFtDC9Vry07PrTbhqiSuUonwm1Lj7FUVai3CiAZqZOkNKzTXMoUKIJ68hTMNZltx6VQbFSY+xRnhCSRpWPWbcRscA+S0gid6eMTr7pqvisWtpEkGDpIBIBMRMagHXWI03pg4iOldvjVxODyWpWy3c4iEHummWcQtwVTu4wNpFWuHYedRWmNIzvZXxGHINQZT0NbCxhVI1FRY/Brl0FLP0OjJUiKmvWCtQirEROlQsKtmo3SmIr0ql9nSoA1GPwsiQKBuYMGtc7Ais3jsK5ckwijdnIRR46/Ss4y+lNfCpmpE1Xs4q07rbQvdJElraKqHSRld3WR4gGiWJKYdA10ICxUKuZrjMWYKoJ7qpLECcpG+9NySBRZTZwASTAoPj+1WFse+xffRO6J6FmEj0BqbjvG+Go5W7nvuhIIUMtpDzCIGUHzOY+NBj20wNqThsIA/Urbtj4qWY/Klk2Vil0s2e0WLxRK4WwLNuAWcyqqv4jcxDfhHRcpOu+1VOLXMDZCJme/iSyj285baMd1RCYyxI2mDM7VWTF4/iLKokITplBW2p6qPxHx1PUir+P4nhcBabD2UTEXXUreu3O8pkEFFjVgOcECeZMxDRpB1JP4QY/izI1q4s/wANwxAOsSsz1kKVnxNEuNYoXGzgyrd4HkQdQR6VknZyAtxHRmUNkdYMPPeEjnqQwg6c6Zw3ins5s3DpujflnWD4Hl9xz46o7vKknkuMu4g0KxDVdxFyh156EYsrmkwmuzSimSR5KK4ABRqRQyav2ZidPWplwqPS4rydBWo4I+oOnKsnYXXf5VoOH3YIrM1fDVccxLI9hg2XMlyCDBlGRgR6E/Oqdl8Yye2xCBrbE5LltRmyyYN1V20HvRA51S41xEPftINfZ2mz8wC5UgH0VP8AcKm4bwPiSr+84bESrGVsMzCFGmmaUJJE6wNd63hJp6MpwvxW/pYxGJtJJN1Mo/EWyjXb34q9wXi6OclthcI/JLx55QQKq2OLPmKF/wBxxQ1dHX+BdJ/FlMhGP5xIOvo7EXOIuYuY7CWbf50cE/8AaMqk/EVt/sbOTBGwwuKnwPQ0+9dJ3rDWe0eCw0IcbdvvOruoZZ56xmA8y1av/EbToCrowIBBDCCDzBNCaE0xYnDhhNBMTYy0Zt4+1ABuICdu+mvlrrVbidsZZGorSLJYF9pSz1C1NJrQiyfOKVV5pUBZqOK9prNohF79xjlRE1d25AAbmhuF4W98/vOMAgH+FhgQyCPxXG2c/wAvujfXSFw/hNvCozk58Q4IN1h3tfeyD8CTpA6akmm8U4qFtoinZQPlXOl8Oj+y1xRbbH2s5HRYkCZUbBkkZvCCKwLXXxfErSoy5UXO1whlCIg77OGjKVMCAYkrr0s4rjD5WXMGBBEHcToY+dZXhuExN249qyxS00F3cwoUElQTqWIOygEyATtIvFpCcr4ariz8FRmTVyDq49q+Y8zI7up/KI6VTs8Q4Na762zdcaqMjkT5XIBNPt9i7A993dju3uAnmQupHqTUlnsHhmYd+8fAMn65ZpoTsHcS7aXr49jh0KB+7Cau4P4ZA7q/yr6kitf2S7G+xC3boDYhoIzarZH8o2L/AM3LYcyTXZ7svh8NrbQB+bk5njpmOwnkK1Vu0BqamToIozfans0uKtCIW6nuOeczKsehkmeR111B8ax/DnRmt3kZHQ95TAImYIhmEHWNgeW9fQV4yd9v/AoNxzgtjErluLDAEJcWA6eRO4zAHKZGlZuN7R0+LzUsZbR4Gbj2+63eXl6dKlS4G2NajtD2SxGHk5fa2v8A+iAQBt30JJXz1Ec6x1yxzT7H36a1L/kpwfYu0TvpXA1JGeIdGHjBA9an9hpIZG8AYYeamD8Kh6JRBNWrGulVpq9gbiK0swAqXwqNBbDYYgTVk3PZJnO/4VO7Hp4Dmad/jdhFARTcc7ASonxJE/AGqJtvdfPdEclTUQJUbbhZMnmcvhWaT69I1X5Oo7/4i/wTDlle4/edzM6ydSBA5azEa7ARXsnDcOLdq3b/ACqq+oAB+dYjsVwhrhW+4i2sFAZ77D3TBnurPUifI1vblwjlWsfrM/O0koL13+yrxLhNjELlvW1cDaZDD/Swhl9DQE/s64eTLW3YcgbtwAf7WBrRnFeFL281VnPRDgOEYewuWzZt2x/KoBPmdyfOhPEuy2FxD53tnMoIhGKB+YzZYk76+OtHlaoo3oyHR5B2i4PYc+zsW8Ujo0MroHXT/SpYHXeYg0O4Z2jfCObLIwl/duSpCQIIXYSQda9w9sxUrmytyaAYPiDuKwHbbh/EL6NbuYW3fUapdtjvqeRUZ86nqACPOtIyIaCnCEs4lcyNlP4kJ1H9R40V/wAtp1NeS9mOLXbTgzlyZQyOuV+chp1jodjPWa9o4dxEXEDg7ifLz8KtyZGKZS/y2nU/GlRL97f8q/7l/rXKMmGKM7xb3V/0ispxTYUqVV4y5GVx29FeyXut/rP/ABWlSrWRnHpqqJ8I98+lKlUIt8NHZ3H3zoi21KlWc+iiDjv8PrUI5en1pUqaGPs/h9P0NeJcR/8AdXv/AJD+j0qVZeU7P8T9ipc9235j9aoPu3mf1pUqzQvKQvufvnXF3pUqowNHwL/pP5/Sn2Pcf1/4PSpVhM9PwfrE9w4T/wBC1/oT/itXTtSpVqebL9mU729NWlSpCJVpq7mlSoGQNvV/De7SpVUSWeNdrv8A3Df93/MVtOx//SHkaVKtmSg5SpUqQz//2Q==" alt="">
                                <span style="font-size: 12px;" >speed</span>
                            </div>
                            <div class="section mb-2">
                                <img class=" rounded-circle" height="30px" width="30px" src="https://upload.wikimedia.org/wikipedia/commons/d/dd/Eduardo_Saverin_CHINICT.JPG" alt="">
                                <span style="font-size: 12px;" >Eduardo Sevrine</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chat col">
                    <div  class="square">
                            <div style="background-color: #000b43;"  class="head p-1 text-center text-white">Title</div>
                            <div style="height:17rem;" class="bd bg-light container">
                                <div class="messg">
                                    <div class="send" >hellow how are you ?</div>

                                    <div style="float: right;  background-color: #001890" class="send text-white" >
                                        <?php 
                                        require "./getId.php";
                                        while ($row = $result->fetch_assoc()) {
                                            $id_user = $row['id_user'] ;
                                            // echo  $id_user;
                                            $sql = "SELECT cnt_messg from message where mess_user = '$id_user'";
                                            $res = $conn->query($sql);
                                            if (mysqli_num_rows($res)>0) {
                                                while ($data = $res->fetch_assoc()) {
                                                

                                                
                                            
                                                    echo "<div>$data[cnt_messg]</div>";
                                                    
        
                                                }
                                            }
                                            }
                                        
                                        
                                        // $row > 0
                                        
                                        
                                        ?>
                                    </div><br><br><br><br>
                                    <div class="send" >cool !!</div>

                                </div>
                                
                            </div>
                            <div class="postMessg">
                                    <form action="" method="post">
                                        <input name="msg" style="width: 90%;" type="text">
                                        <button type="submit" name="messgPost" >Send</button>
                                    </form>
                                    
                            </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>