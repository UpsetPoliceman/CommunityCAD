<div>
    <table class="w-full border border-collapse table-auto border-slate-400">
        <tr class="text-white">
            <th class="border border-slate-400">Agency</th>
            <th class="border border-slate-400">Unit #</th>
            <th class="border border-slate-400">Status</th>
            <th class="border border-slate-400">Time</th>
            <th class="border border-slate-400">Call #</th>
            <th class="border border-slate-400">Description</th>
        </tr>
        @foreach ($active_units as $active_unit)
            <tr class="{{ $active_unit->display_status_text_color }}">
                <td class="p-1 border border-slate-400">
                    {{ $active_unit->user_department->department->initials }}</td>
                <td class="p-1 border border-slate-400">{{ $active_unit->user_department->badge_number }}
                    ({{ $active_unit->display_name }})</td>
                <td class="relative p-1 border border-slate-400" x-data="{ statusOpen: false }">
                    <div class="flex justify-between">
                        <span>{{ $active_unit->status }}</span>
                    </div>
                </td>
                <td class="p-1 border border-slate-400">{{ $active_unit->time }}m</td>
                <td class="relative p-1 border border-slate-400" x-data="{ callsOpen: false }">
                    <div class="flex justify-between">
                        <div class="">
                            @foreach ($active_unit->calls as $call)
                                <a class="hover:underline" href="{{ route('cad.call.show', $call->id) }}">
                                    {{ $call->id }}
                                    @if (!$loop->last)
                                        ,
                                    @endif
                                </a>
                            @endforeach
                        </div>
                        @if (auth()->user()->id == $active_unit->user_id)
                            <a @click="callsOpen = !callsOpen" class="underline cursor-pointer">
                                <svg class="w-6 h-6 text-white" fill="none" stroke-width="1.5" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        @endif
                    </div>
                    @if (auth()->user()->id == $active_unit->user_id)
                        <div @click.outside="callsOpen = false"
                            class="absolute right-0 w-32 p-3 z-50 space-y-3 text-white bg-gray-800 rounded"
                            x-show="callsOpen">
                            @foreach ($calls as $call)
                                @if ($call->attached_units->contains('id', $active_unit->id))
                                    <a @click="callsOpen = false" class="block bg-gray-500" href="#"
                                        wire:click="remove_unit_from_call({{ $active_unit->id }}, {{ $call->id }})">Remove
                                        From Call {{ $call->id }}</a>
                                @else
                                    <a @click="callsOpen = false" class="block hover:bg-gray-500" href="#"
                                        wire:click="add_unit_to_call({{ $active_unit->id }}, {{ $call->id }})">Add
                                        To Call {{ $call->id }}</a>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </td>
                <td class="p-1 border border-slate-400">{{ $active_unit->description }}</td>
            </tr>
        @endforeach
    </table>
</div>
