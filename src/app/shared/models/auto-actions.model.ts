export enum ActionTrigger {
  MovedToColumn = 1,
  AssignedToUser,
  AddedToCategory,
  PointsChanged,
  TaskCreated,
  FileUploaded
}

export enum ActionType {
  SetColor = 1,
  SetCategory,
  AddCategory,
  SetAssignee,
  AddAssignee,
  ClearDueDate,
  AlterColorByPoints,
  StartFlow
}

export class AutoAction {
  constructor(public id: number = 0,
              public trigger: ActionTrigger = ActionTrigger.MovedToColumn,
              public source_id: number = null, // tslint:disable-line
              public type: ActionType = ActionType.SetColor,
              public change_to: string = null, // tslint:disable-line
              public board_id: number = null) { // tslint:disable-line
  }
}

