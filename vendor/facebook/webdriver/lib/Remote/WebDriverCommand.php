<?php
// Copyright 2004-present Facebook. All Rights Reserved.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace Facebook\WebDriver\Remote;

class WebDriverCommand {
  /** @var string */
  private $sessionID;
  /** @var string */
  private $name;
  /** @var array */
  private $parameters;

  /**
   * @param string $session_id
   * @param string $name Constant from DriverCommand
   * @param array $parameters Array of
   */
  public function __construct($session_id, $name, $parameters) {
    $this->sessionID = $session_id;
    $this->name = $name;
    $this->parameters = $parameters;
  }

  /**
   * @return string
   */
  public function getName() {
    return $this->name;
  }

  /**
   * @return string
   */
  public function getSessionID() {
    return $this->sessionID;
  }

  /**
   * @return array
   */
  public function getParameters() {
    return $this->parameters;
  }
}
