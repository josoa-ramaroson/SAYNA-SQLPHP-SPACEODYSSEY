<?php 

// this droplist is for all different value that a row should have
namespace Core;

class Droplist{
    const SPACESHIP = [
        "Identifier",
        "state",
        "status",
        "poids_max"
    ];

    const STATUS = [
        "FREE",
        "ON MISSION"
    ];
    
     const  STATE = [
        "GOOD",
        "BROKEN" ,
        "IN REPARATION",
        "DESTRUCTED"
    ];

    const VIABILITE = [
        "VIABLE",
        "NOT VIABLE",
        "UNKNOWN"
    ];

    const HEALTH_STATE = [
        "HEALTHY",
        "SICK",
        "DEAD"
    ];

    const DISPONIBILITY = [
        "FREE",
        "ON MISSION",
        "OCCUPIED",
        "OFF"
    ];

    const MISSION_STATE = [
        "NEW",
        "IN PREPARATION",
        "IN PROGRESS",
        "FINISHED",
        "ABANDONNED"
    ];

    const MISSSION_LEVEL = [
        "S",
        "A",
        "B",
        "C",
        "D"
    ];
}