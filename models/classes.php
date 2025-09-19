<?php

function classes_find($id) {
  $db = dbConnect();
  $query = $db->prepare("SELECT * FROM classes WHERE id = $id");
  $query->execute([$id]);
  return $query->fetch();
}

function classes_create($name) {
  $db = dbConnect();
  $query = $db->prepare("INSERT INTO classes (name) VALUES ($name)");
  return $query->execute([$name]);
}

function classes_update($id, $name) {
  $db = dbConnect();
  $query = $db->prepare("UPDATE classes SET name = ? WHERE id = $id");
  return $query->execute([$name, $id]);
}

function classes_delete($id) {
  $db = dbConnect();
  $query = $db->prepare("DELETE FROM classes WHERE id = $id");
  return $query->execute([$id]);
}

