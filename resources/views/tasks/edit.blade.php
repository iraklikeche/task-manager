<x-taskForm-layout 
  :task="$task" 
  name="Edit Task" 
  heading="Edit Task" 
  formAction="{{ route('tasks.update', $task->id) }}" 
  formMethod="PUT"
/>
