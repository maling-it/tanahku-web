// Import Halfmoon CSS
import "halfmoon/css/cores/halfmoon.cores.css";
import "halfmoon/css/halfmoon.min.css";

import './olmain';

// some script here
const popoverTriggerList = document.querySelectorAll(
    "[data-bs-toggle='popover']"
);
const popoverList = [...popoverTriggerList].map(
    popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl)
);
