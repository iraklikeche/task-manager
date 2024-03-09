<x-taskForm-layout 
  :task="$task" 
  name="Edit Task" 
  heading="Edit Task" 
  formAction="{{ route('tasks.update', $task->id) }}" 
  formMethod="PUT"
>

  <a href="{{ url()->previous() }}" class="flex items-center gap-4 uppercase font-semibold">
    <x-icons.arrowBack /> <span>{{__('profile.back')}}  </span>
  </a>

</x-taskForm-layout>
