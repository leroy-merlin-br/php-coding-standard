<?php

/**
 * @rule: SlevomatCodingStandard.ControlStructures.RequireTernaryOperator
 */

function () {
    if (true) {
        return true;
    }

    return false;
};
