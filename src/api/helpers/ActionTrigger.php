<?php
use MyCLabs\Enum\Enum;

class ActionTrigger extends Enum {
  const MOVED_TO_COLUMN = 1;
  const ASSIGNED_TO_USER = 2;
  const ADDED_TO_CATEGORY = 3;
  const POINTS_CHANGED = 4;
  const TASK_CREATED = 5;
  const FILE_UPLOADED = 6;
}

