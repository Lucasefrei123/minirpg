<?php 

function persos_find($id) {
  $db = dbConnect();
  $query = $db->prepare("SELECT * FROM personnages WHERE id = $id");
  $query->execute([$id]);
  return $query->fetch();
}

function persos_create($name, $classes_id) {
  $db = dbConnect();
  $pv  = random_int(50, 100);
  $atk = random_int(1, 10);
  $xp  = 0;
  $query = $db->prepare("INSERT INTO personnages (name, pv, atk, xp, class_id) VALUES (?, ?, ?, ?, ?)");
  return $query->execute([$name, $pv, $atk, $xp, $classes_id]);
}

function persos_update($id, $name, $pv, $atk, $xp, $classes_id) {
  $db = dbConnect();
  $query = $db->prepare("UPDATE personnages SET name=$name, pv=$pv, atk=$atk, xp=$xp, class_id=$classes_id WHERE id=$id");
  return $query->execute([$name, $pv, $atk, $xp, $classes_id, $id]);
}

function persos_delete($id) {
  $db = dbConnect();
  $query = $db->prepare("DELETE FROM personnages WHERE id = $id");
  return $query->execute([$id]);
}
