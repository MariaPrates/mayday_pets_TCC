<?php

// Funcao para impedir SQL Injection:
function anti_injection($campo){
  $campo = trim($campo);//limpa espaços vazio
  $campo = strip_tags($campo);//tira tags html e php
  $campo = stripcslashes($campo);//Adiciona barras invertidas a uma string
  return $campo;
}