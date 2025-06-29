<div class="text-md-center text-lg-end">
<?php 
 $usuario=addslashes(htmlspecialchars(trim($_POST["usuario"])));
 $data = array('folio' => $usuario);
 $curl_url = "10.3.27.219/public/index.php/Plataforma/mi_comunidad";
 $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2OTE1MjExNTAsImRhdGEiOnsiZm9saW8iOjU4Mjc3NSwiYXNzaWduZWQiOiJzYW1pZSAtIG1vb2RsZSIsImNyZWF0ZWRCeSI6ImVyaWNrLmJhZGlsbG9AcHJlcGFlbmxpbmVhLnNlcC5nb2IubXgifX0.Y4U7HS3R1Au6T4boKybZTIAnXczNoYFca1qPZOAdsy0";
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $curl_url);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '. $token));
 $json = curl_exec($ch);
 curl_close($ch);

      $obj = json_decode($json, true);
      if (empty($obj['error'])) {
          if(empty($obj['estatus'])){
              foreach($obj as $value){
                  echo '<a href="'.$value['liga'].'" target="_blank" class="btn btn-home btn-sm m-1">'.$value['curso'].' <br> <svg width="45" xmlns="http://www.w3.org/2000/svg" id="modulos" data-name="modulos" viewBox="0 0 85 65.73"><defs><style>      .modulos-1 {        fill: none;        stroke: #000;        stroke-linecap: round;        stroke-miterlimit: 10;        stroke-width: 5px;      }    </style></defs><g id="Capa_1-2" data-name="Capa 1"><g><path class="modulos-1" d="M2.5,57.37H30.36c1.33,0,2.6,.53,3.54,1.46l1.46,1.46c3.91,3.91,10.24,3.91,14.14,0l1.46-1.46c.94-.94,2.21-1.46,3.54-1.46h27.77"></path><path class="modulos-1" d="M42.44,7.24c6.06-3.03,12.89-4.74,20.13-4.74V47.5c-7.24,0-14.07,1.71-20.13,4.74-6.06-3.03-12.89-4.74-20.13-4.74V2.5c7.24,0,14.07,1.71,20.13,4.74Z"></path><line class="modulos-1" x1="12.5" y1="4.6" x2="12.5" y2="47.74"></line><line class="modulos-1" x1="2.5" y1="14.97" x2="2.5" y2="57.37"></line><line class="modulos-1" x1="72.53" y1="5.8" x2="72.53" y2="48.94"></line><line class="modulos-1" x1="82.5" y1="14.97" x2="82.5" y2="57.37"></line></g></g></svg></a>';
                }
            }else{
                echo '<p>'.$obj['estatus'].'</p>';
            }
        } else {
            echo "<script>window.location='".esc_url( home_url( '/acceso-mi-comunidad' ) )."'</script>";
        }
    ?> 
</div>

