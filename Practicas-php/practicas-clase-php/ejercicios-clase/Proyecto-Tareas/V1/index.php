<?php

function contarTareasCompletadas(string $t1, string $t2, string $t3): int
{
    $completadas = 0;
    $tarea = "Completado";

    if($t1 === $tarea) {
        $completadas++;
    }

    if($t2 === $tarea) {
        $completadas++;
    }

    if($t3 === $tarea) {
        $completadas++;
    }
    return $completadas;
}

function crearTareas(&$tarea_1, &$tarea_2, &$tarea_3)
{
    $tarea_1 = "Estudiar PHP";
    $tarea_2 = "Estudiar Despliegue";
    $tarea_3 = "Estudiar Bases de datos";
}

function asigarEstado(): string
{
    $num_rand = mt_rand(1,2);
    if($num_rand == 1){
        $estado = "Completado";
    } else {
        $estado = "No Completado";
    }
    return $estado;
}

function asigarEstilo($estado)
{
    if($estado == "No Completado") {
        $estado = "rounded-pill text-bg-warning";
    } else {
        $estado = "rounded-pill text-bg-success";
    }
    return $estado;
}


// Variables simples para las tareas
$tareas_total = 3;

//Declaramos 3 tareas
crearTareas($tarea_1, $tarea_2, $tarea_3);

//Establecemso el estado de las tareas (de cada una)
$num_rand = mt_rand(1,2);
$tarea_1_estado = asigarEstado();
$tarea_2_estado = asigarEstado();
$tarea_3_estado = asigarEstado();

//Contamos las tareas
$completadas = contarTareasCompletadas($tarea_1_estado, $tarea_2_estado, $tarea_3_estado);
$pendientes = $tareas_total - $completadas;

//Asignamos estilo a las tareas
$tarea_1_estilo = asigarEstilo($tarea_1_estado);
$tarea_2_estilo = asigarEstilo($tarea_2_estado);
$tarea_3_estilo = asigarEstilo($tarea_3_estado);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Tareas - Funciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h1 class="text-center mb-4">Gestor de Tareas</h1>

    <!-- Introducción -->
    <div class="mb-4">
        <p>En esta página trabajaremos con funciones para calcular estadísticas de tareas.
            Actualmente, hay tres tareas predefinidas.</p>
    </div>

    <!-- Tareas con variables simples -->
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Tareas Iniciales</h2>
            <ul class="list-group">
                <li class="list-group-item  "><span
                        class="fw-bold fs-4">Tarea 1:</span>
                    <span class="badge <?=$tarea_1_estilo?>">estado tarea 1</span>
                </li>
                <li class="list-group-item  "><span
                        class="fw-bold fs-4">Tarea 2:</span>
                    <span class="badge <?=$tarea_2_estilo?>">estado tarea 2</span>
                </li>
                <li class="list-group-item  "><span
                        class="fw-bold fs-4">Tarea 3:</span>
                    <span class="badge <?=$tarea_3_estilo?>">estado tarea 3</span>
                </li>

            </ul>
        </div>
    </div>

    <!-- Estadísticas -->
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Estadísticas de Tareas</h2>
            <ul class="list-group">
                <li class="list-group-item" style="color:#007BFF">Total de tareas:
                    <strong> Total de tareas </strong><?=$tareas_total?></li>
                <li class="list-group-item" style="color:#198754">Tareas completadas
                    <strong style="color:#198754"> total de tareas completadas: </strong><strong style="color: #198754"><?=$completadas?></strong></li>
                <li class="list-group-item" style="color:#ffc107">Tareas pendientes:
                    <strong style="color:#ffc107">Total tareas pendientes: </strong><strong style="color: #ffc107"><?=$pendientes?></strong></li>
            </ul>
        </div>
        <!-- Gráfica de estadísticas -->
        <!-- podemosintentar meter un gráfico de js -->
</body>
</html>