<?php

namespace Reliv\ValidationRatMessages\Api;

use Reliv\ValidationRat\Model\ValidationResult;

/**
 * @author James Jervis - https://github.com/jerv13
 */
interface GetMessagesValidationResult
{
    const OPTION_INVALID_MESSAGE = FindCodeMessage::OPTION_INVALID_MESSAGE;
    const OPTION_MESSAGE_PARAMS = GetMessageParams::OPTION_MESSAGE_PARAMS;

    /**
     * @param ValidationResult $validationResult
     * @param array            $options
     *
     * @return array ['{code}' => '{message}']
     */
    public function __invoke(
        ValidationResult $validationResult,
        array $options = []
    ): array;
}
