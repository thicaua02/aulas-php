<?php
const ALUNO = 'Thiago';
define("ESCOLA", "Senac Penha");
$curso = 'Técnico em Informática para Internet';
$tecnologias = ['PHP', 'SQL', 'HTML', 'CSS', "JS"];
function verificarIdade(int $idade) : string {
    return $idade >= 18 ? "maior" : "menor";
}