<?php

/**
 * @rule: SlevomatCodingStandard.Namespaces.DisallowGroupUse
 */

namespace FooNamespace;

use Doctrine\Common\Collections\Expr\{ Comparison, Value, CompositeExpression };
use Symfony\Component\Console\{
    Helper\Table,
    Input\ArrayInput,
    Input\InputInterface,
    Output\NullOutput,
    Output\OutputInterface,
    Question\Question,
    Question\ChoiceQuestion as Choice,
    Question\ConfirmationQuestion
};
