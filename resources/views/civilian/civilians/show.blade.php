@extends('layouts.civilian')

@section('content')
    <div class="card">
        <div class="lg:flex lg:justify-between py-2 border-b-2">
            <h2 class="text-2xl text-white">{{ $civilian->name }} (SSN: {{ $civilian->s_n_n }})</h2>
            <div class="flex space-x-2">
                <a class="secondary-button-sm" href="{{ route('civilian.civilians.index') }}">
                    <svg class="w-6 h-6" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                <a class="edit-button-sm" href="{{ route('civilian.civilians.edit', $civilian->id) }}">
                    <x-edit-button></x-edit-button>
                </a>
                <form action="{{ route('civilian.civilians.destroy', $civilian->id) }}" method="POST"
                    onsubmit="return confirm('Are you sure you wish to delete this Civilian? This can\'t be undone!');">
                    @csrf
                    @method('DELETE')
                    <button class="delete-button-sm">
                        <svg class="w-6 h-6" id="Layer_1" style="enable-background:new 0 0 122.88 118.31" version="1.1"
                            viewBox="0 0 122.88 118.31" x="0px" xml:space="preserve"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px">
                            <g>
                                <path
                                    d="M92.57,50.29c4.24-3.99,6.15-10.01,6.24-16.23c0.1-6.86-1.98-13.93-5.55-18.87c-0.16-0.22-0.32-0.44-0.49-0.65 c-1.48-1.89-3.33-3.53-5.48-4.94c-2.31-1.52-4.95-2.76-7.81-3.75C73.74,3.86,66.99,2.76,60.2,2.77 c-7.62,0.01-15.29,1.42-21.63,4.56c-6.23,3.09-11.18,7.85-13.52,14.62c-0.96,2.79-1.49,5.93-1.48,9.44c0,2.5,0.3,5.04,0.88,7.55 c0.58,2.51,1.44,4.98,2.55,7.34c0.66,1.38,1.39,2.62,2.21,3.7c0.35,0.45,0.71,0.88,1.09,1.28c0.12-0.51,0.23-1.03,0.31-1.54 c0.15-0.9,0.25-1.81,0.3-2.71c0.15-3.15-0.4-4.65-1.11-6.64c-0.34-0.94-0.71-1.97-1.09-3.34c-0.56-2.02-0.85-3.99-0.77-5.88 c0.09-1.96,0.59-3.83,1.62-5.56c0.39-0.66,1.24-0.87,1.9-0.48c0.66,0.39,0.87,1.24,0.48,1.9c-0.79,1.31-1.16,2.74-1.23,4.26 c-0.07,1.59,0.19,3.28,0.67,5.03c0.34,1.22,0.7,2.22,1.02,3.13c0.82,2.28,1.45,4.01,1.28,7.71l0,0.01 c-0.05,1.03-0.16,2.04-0.33,3.03c-0.17,1-0.4,1.99-0.68,2.97c-0.03,0.09-0.06,0.18-0.1,0.26c-0.04,0.1-0.09,0.21-0.13,0.31 c0.01,0.3-0.08,0.62-0.27,0.88c-0.01,0.02-0.03,0.03-0.04,0.05c-0.62,2.13-0.84,4.86-0.5,7.46c0.33,2.58,1.21,4.98,2.78,6.38 c1,0.89,2.38,1.24,3.9,1.63c2.33,0.6,4.92,1.26,7.51,3.74c1.1,1.05,2.21,2.37,2.91,3.84c0.54,1.12,0.85,2.33,0.76,3.58 c0.5,0.1,1.01,0.2,1.51,0.29c0.05,0,0.11,0.01,0.16,0.03c1.12,0.2,2.24,0.37,3.37,0.5c0.05,0,0.09,0.01,0.14,0.02 c2.16,0.25,4.33,0.38,6.51,0.38c3.41,0.01,6.86-0.29,10.35-0.91c0.02-0.01,0.05-0.01,0.07-0.01c0.54-0.1,1.09-0.2,1.63-0.31 c-0.16-1.58,0.38-3,1.23-4.28c0.8-1.19,1.84-2.23,2.79-3.13c2.59-2.48,5.18-3.14,7.51-3.74c1.52-0.39,2.9-0.74,3.9-1.63 c1.57-1.4,2.45-3.79,2.78-6.38c0.4-3.13,0-6.47-0.94-8.7c-0.04-0.08-0.08-0.17-0.1-0.26c-0.28-0.98-0.51-1.97-0.68-2.97 c-0.17-0.99-0.28-1.99-0.33-3.01l0-0.02c-0.17-3.7,0.45-5.43,1.28-7.71c0.33-0.91,0.69-1.91,1.02-3.13 c0.48-1.76,0.74-3.45,0.67-5.03c-0.07-1.51-0.45-2.94-1.23-4.26c-0.39-0.66-0.18-1.51,0.48-1.9c0.66-0.39,1.51-0.18,1.9,0.48 c1.04,1.73,1.53,3.6,1.62,5.56c0.09,1.89-0.21,3.86-0.77,5.88c-0.38,1.37-0.75,2.41-1.09,3.34c-0.72,1.98-1.26,3.49-1.11,6.64 l0,0.02c0.04,0.89,0.14,1.79,0.3,2.69C92.49,49.9,92.53,50.09,92.57,50.29L92.57,50.29z M48.95,82.62 c-0.22,0.18-0.51,0.3-0.81,0.31l-0.08,3.28c0.63,0.39,1.33,0.75,2.07,1.06l0.09-4.39C49.8,82.8,49.38,82.71,48.95,82.62 L48.95,82.62z M51.66,83.13l-0.1,4.67c0.68,0.23,1.4,0.43,2.13,0.6l0.1-4.96C53.08,83.35,52.37,83.25,51.66,83.13L51.66,83.13z M55.22,83.61l-0.1,5.09c0.6,0.11,1.2,0.2,1.82,0.27l0.1-5.2C56.43,83.73,55.83,83.67,55.22,83.61L55.22,83.61z M58.47,83.86 l-0.11,5.26c0.77,0.06,1.54,0.09,2.31,0.1l-0.03-5.3C59.93,83.91,59.2,83.89,58.47,83.86L58.47,83.86z M62.09,83.92l0.03,5.29 c0.72-0.02,1.45-0.06,2.16-0.12l-0.11-5.24C63.48,83.89,62.78,83.91,62.09,83.92L62.09,83.92z M65.61,83.77l0.1,5.18 c0.62-0.08,1.22-0.17,1.82-0.27l-0.1-5.07C66.82,83.67,66.21,83.72,65.61,83.77L65.61,83.77z M68.86,83.44l0.1,4.94 c0.74-0.17,1.45-0.37,2.13-0.59l-0.1-4.66C70.28,83.25,69.57,83.35,68.86,83.44L68.86,83.44z M72.42,82.88l0.09,4.38 c0.77-0.32,1.48-0.67,2.11-1.06l-0.07-3.54c-0.17-0.01-0.33-0.05-0.47-0.11C73.52,82.67,72.97,82.78,72.42,82.88L72.42,82.88z M81.64,90.94c-0.1-0.28-0.11-0.6-0.01-0.91c0.01-0.04,0.02-0.07,0.04-0.1c0-0.89-0.04-1.77-0.09-2.66 c-0.19-3.68-0.38-7.56,2.14-13.05c0-0.41,0.19-0.81,0.52-1.08l0.02-0.05c-0.57,0.16-1.15,0.35-1.74,0.59 c-0.94,2.32-1.63,4.36-2.18,6.37c-0.63,2.31-1.09,4.62-1.55,7.28c-0.07,0.42-0.1,0.6-0.13,0.78c-0.31,1.94-0.44,2.81-2.38,4.46 c-3.28,2.79-9.29,4.26-15.3,4.2c-5.72-0.06-11.49-1.5-14.98-4.51c-1.96-1.69-2.04-2.28-2.26-4.13c-0.04-0.3-0.08-0.64-0.13-0.99 c-0.39-2.67-0.84-5-1.51-7.34c-0.58-2.04-1.32-4.09-2.32-6.4c-0.37-0.13-0.75-0.24-1.11-0.34l0.08,0.18 c0.26,0.26,0.42,0.61,0.42,0.97c0.43,1.04,0.79,2.11,1.07,3.2c0.76,2.94,0.65,5.63,0.54,8.37l0,0.04c0.12,0.33,0.11,0.7-0.04,1.05 c-0.04,1.06-0.06,2.13,0,3.23c0.01,0.03,0.02,0.05,0.03,0.08c0.12,0.3,0.13,0.63,0.04,0.92c0.15,1.62,0.49,3.29,1.19,5.05 c0.3,0.76,0.65,1.47,1.06,2.14c0.16,0.12,0.31,0.27,0.41,0.46c0.07,0.12,0.12,0.25,0.14,0.39c1.33,1.9,3.08,3.42,5.1,4.6 c3.22,1.87,7.1,2.86,11.05,3.03c3.97,0.17,7.99-0.47,11.45-1.84c3.54-1.4,6.47-3.57,8.11-6.39C81,95.63,81.53,93.23,81.64,90.94 L81.64,90.94z M84.23,89.45c2.29,0.85,5.68,2.41,9.02,3.95c4.16,1.91,8.24,3.79,9.74,4.1c0.9,0.19,2-0.07,3.14-0.33 c0.87-0.2,1.76-0.41,2.71-0.48c1.31-0.09,2.41,0.11,3.31,0.47c1.19,0.48,2.02,1.25,2.5,2c0.07,0.11,0.14,0.25,0.21,0.41 c0.51,1.16,0.33,2.78-0.53,4.39c-0.76,1.43-2.08,2.91-3.94,4.07c-0.27,0.17-0.57,0.34-0.88,0.5c0.24,3.86-0.33,6.34-1.3,7.81 c-0.71,1.07-1.63,1.66-2.64,1.87c-0.96,0.21-1.96,0.06-2.92-0.34c-1.84-0.76-3.59-2.5-4.45-4.29c-2.17-4.59-2.47-4.73-7.61-7.23 c-0.69-0.33-1.46-0.71-2.36-1.15l-0.05-0.03l-7.46-4.09c-2.01,2.73-5.03,4.82-8.56,6.22c-3.79,1.51-8.18,2.21-12.51,2.02 c-4.35-0.19-8.65-1.28-12.23-3.37c-2.13-1.24-4-2.82-5.49-4.78l-7.29,4l-0.05,0.03c-0.9,0.44-1.67,0.82-2.36,1.15 c-5.15,2.5-5.44,2.64-7.61,7.23c-0.85,1.8-2.61,3.54-4.45,4.29c-0.96,0.4-1.97,0.54-2.92,0.34c-1.02-0.22-1.93-0.81-2.64-1.87 c-0.97-1.47-1.54-3.95-1.3-7.81c-0.31-0.16-0.6-0.33-0.87-0.5c-1.86-1.16-3.17-2.65-3.94-4.08c-0.86-1.61-1.04-3.22-0.53-4.39 c0.07-0.16,0.14-0.29,0.21-0.41c0.47-0.75,1.3-1.52,2.5-2c0.9-0.36,2-0.56,3.31-0.47c0.99,0.07,1.89,0.25,2.79,0.43 c1.13,0.22,2.23,0.44,3.22,0.35c1.91-0.17,7.52-2.8,12.39-5.09c2.18-1.03,4.22-1.99,5.78-2.65c-0.03-0.86-0.01-1.71,0.01-2.55 l-16.49-8.32c-7.29-3.67-7.56-3.61-12.99-2.5l-0.27,0.05c-1.9,0.39-4.23,0.16-5.89-0.7c-0.92-0.48-1.67-1.15-2.11-2.03 c-0.46-0.92-0.56-1.99-0.15-3.22c0.56-1.66,2.14-3.66,5.27-5.97c0.22-2.6,0.63-4.64,1.24-6.12c0.81-1.96,1.99-3.04,3.55-3.17 c0.88-0.08,1.99,0.13,3.09,0.8c0.83,0.5,1.65,1.26,2.36,2.37c0.56,0.86,1.01,1.74,1.45,2.6c0.51,0.99,1,1.95,1.61,2.76 c1.3,1.72,8.41,4.73,13.87,6.94c-0.05-0.04-0.09-0.08-0.14-0.12c-2.12-1.88-3.27-4.91-3.68-8.1c-0.36-2.81-0.14-5.8,0.5-8.24 c-0.86-0.74-1.65-1.59-2.38-2.55c-0.94-1.24-1.78-2.64-2.51-4.2c-1.2-2.54-2.13-5.2-2.75-7.9c-0.62-2.69-0.94-5.44-0.95-8.16 c-0.01-3.83,0.57-7.27,1.64-10.35c2.6-7.53,8.05-12.81,14.91-16.2C44.08,1.51,52.17,0.01,60.2,0c7.1-0.01,14.16,1.15,20.18,3.23 c3.07,1.06,5.92,2.41,8.43,4.05c2.39,1.57,4.48,3.42,6.14,5.55c0.19,0.24,0.37,0.49,0.55,0.74c3.9,5.4,6.18,13.09,6.07,20.52 c-0.11,7.42-2.59,14.61-8.18,19.14c0.87,2.58,1.2,6.01,0.79,9.21c-0.41,3.18-1.56,6.19-3.65,8.08c5.41-2.2,12.24-5.11,13.51-6.79 c0.61-0.81,1.1-1.77,1.61-2.76c0.44-0.86,0.89-1.73,1.45-2.6c0.71-1.1,1.54-1.86,2.36-2.37c1.1-0.67,2.21-0.87,3.09-0.8 c1.55,0.13,2.74,1.21,3.55,3.17c0.61,1.47,1.02,3.52,1.24,6.12c3.13,2.31,4.72,4.31,5.27,5.97c0.41,1.23,0.31,2.31-0.15,3.22 c-0.44,0.88-1.19,1.55-2.11,2.03c-1.66,0.86-3.99,1.09-5.89,0.7l-0.27-0.05c-5.42-1.12-5.7-1.17-12.99,2.5l-17.05,8.6 C84.19,88.13,84.22,88.79,84.23,89.45L84.23,89.45z M82.14,98.7l7.35,4.03c0.83,0.41,1.6,0.78,2.28,1.12 c5.98,2.91,6.33,3.07,8.92,8.55c0.58,1.23,1.76,2.41,2.99,2.92c0.46,0.19,0.91,0.27,1.29,0.19c0.32-0.07,0.64-0.29,0.91-0.69 c0.74-1.11,1.12-3.28,0.78-7c-0.05-0.58,0.27-1.15,0.83-1.39c0.49-0.21,0.96-0.46,1.41-0.74c1.42-0.89,2.41-1.99,2.96-3.02 c0.46-0.86,0.61-1.58,0.43-1.99l-0.02-0.04c-0.2-0.32-0.58-0.66-1.17-0.89c-0.53-0.21-1.22-0.33-2.08-0.27 c-0.75,0.05-1.52,0.23-2.29,0.41c-1.43,0.33-2.82,0.65-4.32,0.34c-1.79-0.37-6.02-2.32-10.32-4.3c-2.89-1.33-5.81-2.67-7.98-3.54 C83.9,94.3,83.36,96.35,82.14,98.7L82.14,98.7z M38.4,92.64c-1.38,0.61-3.07,1.41-4.86,2.25c-5.09,2.39-10.95,5.15-13.33,5.35 c-1.37,0.12-2.67-0.13-4-0.4c-0.81-0.16-1.65-0.32-2.45-0.38c-0.86-0.06-1.55,0.06-2.08,0.27c-0.59,0.24-0.97,0.57-1.17,0.89 l-0.02,0.04c-0.18,0.4-0.02,1.13,0.43,1.99c0.55,1.04,1.54,2.13,2.96,3.02c0.45,0.28,0.92,0.53,1.41,0.74 c0.56,0.24,0.88,0.81,0.83,1.39c-0.33,3.72,0.05,5.89,0.78,7c0.27,0.41,0.58,0.62,0.91,0.69c0.38,0.08,0.83,0,1.29-0.19 c1.23-0.5,2.41-1.69,2.99-2.92c2.59-5.47,2.93-5.64,8.92-8.55c0.69-0.33,1.45-0.71,2.28-1.12l7.12-3.91 c-0.3-0.56-0.57-1.14-0.81-1.74C38.99,95.53,38.62,94.06,38.4,92.64L38.4,92.64z M84.05,84.42l15.91-8.03 c8.15-4.1,8.47-4.04,14.79-2.74l0.27,0.05c1.34,0.27,2.95,0.13,4.07-0.45c0.43-0.22,0.75-0.49,0.91-0.8c0.14-0.28,0.15-0.64,0-1.11 c-0.41-1.23-1.81-2.86-4.73-4.94c-0.36-0.23-0.6-0.62-0.63-1.07c-0.18-2.61-0.55-4.59-1.09-5.9c-0.38-0.93-0.79-1.42-1.21-1.45 c-0.38-0.03-0.89,0.07-1.43,0.4c-0.49,0.3-1,0.78-1.46,1.5c-0.49,0.76-0.91,1.57-1.32,2.37c-0.57,1.1-1.12,2.18-1.86,3.16 c-1.94,2.57-11.36,6.36-17.17,8.69c-1.23,0.49-2.29,0.92-3.06,1.24C84.39,78.97,84.05,81.83,84.05,84.42L84.05,84.42z M36.85,75.34 c-0.77-0.32-1.83-0.75-3.06-1.25c-5.81-2.34-15.24-6.13-17.17-8.69c-0.74-0.99-1.3-2.06-1.86-3.16c-0.41-0.8-0.83-1.61-1.32-2.37 c-0.47-0.72-0.97-1.2-1.46-1.5c-0.54-0.33-1.04-0.43-1.43-0.4c-0.42,0.04-0.83,0.53-1.21,1.45c-0.54,1.31-0.91,3.29-1.09,5.9 c-0.03,0.45-0.28,0.84-0.63,1.07c-2.92,2.08-4.32,3.71-4.73,4.94c-0.16,0.47-0.14,0.83,0,1.11c0.16,0.31,0.48,0.58,0.91,0.8 c1.12,0.58,2.73,0.73,4.07,0.45l0.27-0.05c6.32-1.3,6.64-1.37,14.79,2.74l15.35,7.75c0.06-2.02,0.02-4.03-0.51-6.08 C37.53,77.15,37.22,76.25,36.85,75.34L36.85,75.34z M48.03,87.85l-0.09,3.97c0.63,0.44,1.33,0.84,2.08,1.19l0.09-4.2 C49.37,88.52,48.67,88.2,48.03,87.85L48.03,87.85z M51.53,89.31l-0.09,4.3c0.68,0.26,1.4,0.48,2.14,0.68l0.09-4.41 C52.93,89.71,52.21,89.52,51.53,89.31L51.53,89.31z M55.09,90.16L55,94.62c0.6,0.12,1.2,0.22,1.82,0.31l0.09-4.51 C56.29,90.35,55.69,90.26,55.09,90.16L55.09,90.16z M58.34,90.55l-0.09,4.54c0.82,0.08,1.64,0.12,2.46,0.14l-0.02-4.57 C59.9,90.65,59.12,90.61,58.34,90.55L58.34,90.55z M62.13,90.65l0.02,4.58c0.76-0.02,1.51-0.06,2.25-0.13l-0.09-4.57 C63.59,90.59,62.86,90.63,62.13,90.65L62.13,90.65z M65.74,90.39l0.09,4.55c0.62-0.08,1.22-0.18,1.82-0.3l-0.09-4.52 C66.96,90.23,66.35,90.32,65.74,90.39L65.74,90.39z M68.99,89.84l0.09,4.48c0.75-0.19,1.46-0.41,2.14-0.66l-0.09-4.38 C70.44,89.49,69.72,89.68,68.99,89.84L68.99,89.84z M72.55,88.79l0.09,4.27c0.78-0.37,1.49-0.78,2.11-1.23l-0.08-3.99 C74.01,88.19,73.3,88.51,72.55,88.79L72.55,88.79z M46.62,86.62c0-0.03,0-0.05,0-0.08l0.11-4.65c-0.04-0.17-0.06-0.35-0.03-0.54 c0.12-0.83-0.08-1.67-0.46-2.47c-0.54-1.12-1.43-2.17-2.33-3.03c-0.68-0.65-1.38-1.15-2.09-1.55c0.72,1.78,1.29,3.44,1.76,5.08 c0.68,2.42,1.15,4.8,1.55,7.53c0.06,0.41,0.1,0.74,0.14,1.03c0.15,1.24,0.21,1.74,1.26,2.72L46.62,86.62L46.62,86.62z M76.15,90.56 c0.7-0.82,0.8-1.5,0.99-2.67c0.05-0.31,0.1-0.65,0.13-0.8c0.46-2.68,0.92-5.02,1.58-7.42c0.43-1.56,0.93-3.14,1.57-4.84 c-0.42,0.29-0.84,0.63-1.26,1.03c-0.84,0.81-1.77,1.71-2.4,2.67c-0.54,0.81-0.88,1.68-0.76,2.56c0.03,0.2,0.01,0.4-0.04,0.58 L76.15,90.56L76.15,90.56z M60.66,72.75l-0.14-13.8c-4.36,2.48-7.79,9.42-5.5,16.28C55.9,77.86,59.84,74.58,60.66,72.75 L60.66,72.75z M62.15,72.75l0.14-13.8c4.36,2.48,7.79,9.42,5.5,16.28C66.9,77.86,62.97,74.58,62.15,72.75L62.15,72.75z M71.57,58.51c1.82,2.25,4.08,4.27,6.23,4.21c4.03-0.11,7.18-4.09,8.36-7.6c0.68-2.03,1.5-5.04,0.26-6.93 c-1.78-2.71-4.98-2.9-8.41-3.5c-5.27-0.93-9.99-2.28-10.76,3.64c-0.16,1.22-0.12,2.11,0.09,2.94 C67.88,53.36,70.22,56.84,71.57,58.51L71.57,58.51z M51.39,58.51c-1.82,2.25-4.08,4.27-6.23,4.21c-4.03-0.11-7.18-4.09-8.36-7.6 c-0.68-2.03-1.5-5.04-0.26-6.93c1.78-2.71,4.98-2.9,8.41-3.5c5.27-0.93,9.99-2.28,10.76,3.64c0.16,1.22,0.12,2.11-0.09,2.94 C55.08,53.36,52.74,56.84,51.39,58.51L51.39,58.51z" />
                            </g>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        <div class="flex flex-wrap pt-4 -mx-4">
            <div class="w-full px-4 md:w-1/2">
                @if (!is_null($civilian->picture))
                    <img class="block h-64 rounded-md" src="{{ $civilian->picture }}">
                @else
                    <img class="block h-64 rounded-md"
                        src="https://st3.depositphotos.com/6672868/13701/v/600/depositphotos_137014128-stock-illustration-user-profile-icon.jpg">
                @endif
            </div>

            <div class="w-full px-4 text-white md:w-1/2">
                <p><span class="text-gray-300">Full Name:</span> {{ $civilian->name }}</p>
                <p><span class="text-gray-300">Social Security Number:</span> {{ $civilian->id }}</p>
                <p><span class="text-gray-300">Date of Birth:</span> {{ $civilian->date_of_birth->format('m/d/Y') }}
                    (Age: {{ $civilian->age }})
                </p>
                <p><span class="text-gray-300">Gender:</span> {{ $civilian->gender }}</p>
                <p><span class="text-gray-300">Race:</span> {{ $civilian->race }}</p>
                <p><span class="text-gray-300">Weight:</span> {{ $civilian->weight }}lb
                    ({{ round($civilian->weight / 2.205) }}kg)</p>
                <p><span class="text-gray-300">Height:</span> {{ floor($civilian->height / 12) }}'
                    {{ $civilian->height % 12 }}"
                    ({{ round($civilian->height * 2.54) }}cm)</p>
                <p><span class="text-gray-300">Address:</span> {{ $civilian->address }}</p>
                <p><span class="text-gray-300">Occupation:</span> {{ $civilian->occupation }}</p>
                <p><span class="text-gray-300">Phone Number:</span> {{ $civilian->phone_number }}</p>

            </div>
        </div>
    </div>
    <div class="card">
        <div class="flex flex-wrap">
            {{-- <a class="new-button-md m-1 md:m-3" href="#">File Name Change</a> --}}
            <a class="delete-button-md m-1 md:m-3" href="{{ route('civilian.call.create', $civilian->id) }}">Make 911
                Call</a>
        </div>
    </div>

    <div class="card">
        <div class="flex justify-between py-2 border-b-2">
            <h2 class="text-2xl text-white">Licenses</h2>
            <div class="flex">
                <a class="new-button-sm" href="{{ route('civilian.license.create', $civilian->id) }}">
                    <x-new-button></x-new-button>
                </a>
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="text-white">
                    @forelse($civilian->licenses as $license)
                        <?php
                        $status = $license->status_name;
                        $status_color = 'text-green-400';
                        $reregister_button = false;
                        $reregister = false;
                        $revoked = false;
                        
                        if ($license->expires_on < date('Y-m-d')) {
                            $status = 'Expired';
                            $status_color = 'text-yellow-400';
                            $reregister = true;
                            $reregister_button = true;
                        }
                        
                        if ($license->status_name == 'Revoked' || $license->status_name == 'Suspended') {
                            $status = $license->status_name;
                            $status_color = 'text-red-400';
                            $reregister_button = false;
                            $revoked = true;
                        }
                        ?>
                        <div class="flex items-center p-2">
                            @if ($reregister_button)
                                <a class="inline-flex px-1 py-1 mr-2 text-white bg-green-500 rounded-lg hover:bg-green-400"
                                    href="{{ route('civilian.license.renew', ['license' => $license->id, 'civilian' => $civilian->id]) }}">
                                    <svg class="w-4 h-4" fill="none" stroke-width="1.5" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            @endif

                            @if (!$revoked && !$reregister)
                                <form
                                    action="{{ route('civilian.license.destroy', ['civilian' => $civilian->id, 'license' => $license->id]) }}"
                                    class="mr-2" method="POST"
                                    onsubmit="return confirm('Are you sure you wish to delete this license? This can\'t be undone!');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="delete-button-sm">
                                        <x-delete-button></x-delete-button>
                                    </button>
                                </form>
                            @endif

                            <p class="{{ $status_color }}">{{ $license->license_type->name }} | {{ $license->id }} |
                                {{ $status }} | Expires: {{ $license->expires_on->format('m/d/Y') }}
                            </p>

                        </div>
                    @empty
                        <p class="">No Licenses</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="flex justify-between py-2 border-b-2">
            <h2 class="text-2xl text-white">Medical Records</h2>
            <div class="flex">
                <a class="new-button-sm" href="{{ route('civilian.medical_record.create', $civilian->id) }}">
                    <x-new-button></x-new-button>
                </a>
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="text-white">
                    @forelse($civilian->medical_records as $medical_record)
                        <div class="flex items-center p-2">
                            <form
                                action="{{ route('civilian.medical_record.destroy', ['civilian' => $civilian->id, 'medical_record' => $medical_record->id]) }}"
                                class="mr-2" method="POST"
                                onsubmit="return confirm('Are you sure you wish to delete this record? This can\'t be undone!');">
                                @csrf
                                @method('DELETE')
                                <button class="delete-button-sm">
                                    <x-delete-button></x-delete-button>
                                </button>
                            </form>
                            <p class=""><span class="font-bold">{{ $medical_record->name }}:</span>
                                {{ $medical_record->value }}
                            </p>
                        </div>
                    @empty
                        <p class="">No Medical Records</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="flex justify-between py-2 border-b-2">
            <h2 class="text-2xl text-white">
                Vehicles
                <span class="text-base">{{ $civilian->vehicles->count() }}/{{ $current_civilian_level->vehicle_limit }}
                    used</span>
            </h2>

            <div class="flex">
                @if ($current_civilian_level->vehicle_limit > $civilian->vehicles->count())
                    <a class="new-button-sm" href="{{ route('civilian.vehicle.create', $civilian->id) }}">
                        <x-new-button></x-new-button>
                    </a>
                @endif
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                @forelse($civilian->vehicles as $vehicle)
                    <?php
                    $status = $vehicle->status_name;
                    $status_color = 'text-green-400';
                    $reregister = false;
                    $transfer = false;
                    $delete = true;
                    $stolen = true;
                    $found = false;
                    $expire = true;
                    
                    if ($vehicle->registration_expire < date('Y-m-d')) {
                        $status = 'Expired';
                        $status_color = 'text-yellow-400';
                        $reregister = true;
                        $transfer = false;
                        $delete = false;
                        $expire = false;
                    }
                    
                    if ($vehicle->status_name == 'Stolen') {
                        $status = 'Stolen';
                        $status_color = 'text-yellow-400';
                        $reregister = false;
                        $transfer = false;
                        $delete = false;
                        $stolen = false;
                        $found = true;
                        $expire = false;
                    }
                    
                    if ($vehicle->status_name == 'Impounded' || $vehicle->status_name == 'Booted') {
                        $status = $vehicle->status_name;
                        $status_color = 'text-red-400';
                        $reregister = false;
                        $transfer = false;
                        $delete = false;
                        $stolen = false;
                        $expire = false;
                    }
                    ?>
                    <div class="flex items-center p-2 space-x-2">
                        @if ($reregister)
                            <a class="new-button-sm"
                                href="{{ route('civilian.vehicle.renew', ['vehicle' => $vehicle->id, 'civilian' => $civilian->id]) }}"
                                title="Reregister vehicle">
                                <svg class="w-4 h-4" fill="none" stroke-width="1.5" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        @endif

                        @if ($transfer)
                            <a class="text-white bg-purple-500 button-sm hover:bg-purple-400"
                                href="{{ route('civilian.vehicle.renew', ['vehicle' => $vehicle->id, 'civilian' => $civilian->id]) }}"
                                title="Set as expired">
                                <svg class="w-4 h-4" fill="none" stroke-width="1.5" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        @endif

                        @if ($found)
                            <a class="text-white bg-purple-500 button-sm hover:bg-purple-400"
                                href="{{ route('civilian.vehicle.found', ['vehicle' => $vehicle->id, 'civilian' => $civilian->id]) }}"
                                title="Set as not stolen">
                                <svg class="w-4 h-4" fill="none" stroke-width="1.5" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        @endif

                        @if ($expire)
                            <a class="text-white bg-red-500 button-sm hover:bg-red-400"
                                href="{{ route('civilian.vehicle.expire', ['vehicle' => $vehicle->id, 'civilian' => $civilian->id]) }}"
                                title="Set as expired">
                                <svg class="w-4 h-4" fill="none" stroke-width="1.5" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </a>
                        @endif

                        @if ($stolen)
                            <a class="text-white bg-orange-500 button-sm hover:bg-orange-400"
                                href="{{ route('civilian.vehicle.stolen', ['vehicle' => $vehicle->id, 'civilian' => $civilian->id]) }}"
                                title="Set as stolen">
                                <svg class="w-4 h-4" fill="none" stroke-width="1.5" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </a>
                        @endif

                        @if ($delete)
                            <form
                                action="{{ route('civilian.vehicle.destroy', ['civilian' => $civilian->id, 'vehicle' => $vehicle->id]) }}"
                                class="mr-2" method="POST"
                                onsubmit="return confirm('Are you sure you wish to delete this vehicle? This can\'t be undone!');">
                                @csrf
                                @method('DELETE')
                                <button class="delete-button-sm" title="Delete vehicle">
                                    <x-delete-button></x-delete-button>
                                </button>
                            </form>
                        @endif

                        <p class="{{ $status_color }}">{{ $vehicle->plate }} | {{ $vehicle->model }} |
                            {{ $status }} | Expires: {{ $vehicle->registration_expire->format('m/d/Y') }}
                        </p>

                    </div>
                @empty
                    <p class="text-white">No Vehicles</p>
                @endforelse
            </div>
        </div>
    </div>

    <div class="card">
        <div class="flex justify-between py-2 border-b-2">
            <h2 class="text-2xl text-white">
                Weapons
                <span class="text-base">{{ $civilian->weapons->count() }}/{{ $current_civilian_level->firearm_limit }}
                    used</span>
            </h2>
            <div class="flex">
                @if ($current_civilian_level->firearm_limit > $civilian->weapons->count())
                    <a class="new-button-sm" href="{{ route('civilian.weapon.create', $civilian->id) }}">
                        <x-new-button></x-new-button>
                    </a>
                @endif
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="text-white">
                    @forelse($civilian->weapons as $weapon)
                        <div class="flex items-center p-2">
                            <form
                                action="{{ route('civilian.weapon.destroy', ['civilian' => $civilian->id, 'weapon' => $weapon->id]) }}"
                                class="mr-2" method="POST"
                                onsubmit="return confirm('Are you sure you wish to delete this weapon? This can\'t be undone!');">
                                @csrf
                                @method('DELETE')
                                <button class="delete-button-sm">
                                    <x-delete-button></x-delete-button>
                                </button>
                            </form>
                            <p class=""><span class="font-bold">{{ $weapon->model }}:</span>
                                {{ $weapon->serial_number }}
                            </p>
                        </div>
                    @empty
                        <p class="">No Weapons</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="flex justify-between py-2 border-b-2">
            <h2 class="text-2xl text-white">
                Charges
            </h2>
        </div>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="text-white">
                    @forelse($civilian->tickets as $ticket)
                        <div class="flex items-center p-2 space-x-2">
                            @php
                                if ($ticket->type_id == 1) {
                                    $type = 'Warning';
                                    $text_color = 'text-yellow-500';
                                } elseif ($ticket->type_id == 2) {
                                    $type = 'Ticket';
                                    $text_color = 'text-orange-500';
                                } elseif ($ticket->type_id == 3) {
                                    $type = 'Arrest';
                                    $text_color = 'text-red-500';
                                }
                            @endphp

                            @if ($ticket->plea_type == 0)
                                <a class="new-button-sm" href="{{ route('civilian.civlian.plea.guilty', $ticket->id) }}"
                                    title="Plea Guilty">
                                    <svg class="w-4 h-4" fill="none" stroke-width="1.5" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>

                                <a class="delete-button-sm"
                                    href="{{ route('civilian.civlian.plea.not_guilty', $ticket->id) }}"
                                    title="Plea Not-Guilty">
                                    <svg class="w-4 h-4" fill="none" stroke-width="1.5" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            @endif

                            {{-- <a class="button-sm bg-indigo-700 hover:bg-indigo-600" href="#"
                                title="File For Expungement">
                                <svg class="w-4 h-4" fill="none" stroke-width="1.5" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a> --}}

                            <a class="block {{ $text_color }}" href="#"
                                onclick="openExternalWindow('{{ route('civilian.ticket.show', $ticket->id) }}')">({{ $ticket->id }})
                                {{ $type }} on {{ $ticket->offense_occured_at->format('m/d/Y H:i') }}
                                <span class="block ml-5">Offense(s)
                                    @foreach ($ticket->charges as $charge)
                                        @if (!$loop->last)
                                            {{ $charge->penal_code->name }} (x{{ $charge->counts }}),
                                        @else
                                            {{ $charge->penal_code->name }} (x{{ $charge->counts }})
                                        @endif
                                    @endforeach
                                </span>
                                <span class="block ml-5">Plea:
                                    @switch($ticket->plea_type)
                                        @case(0)
                                            Pending Decision from Civilian. Courtdate:
                                            @if ($ticket->court_at)
                                                {{ $ticket->court_at->format('m/d/Y') }}
                                            @else
                                                Contact court directly
                                            @endif
                                        @break

                                        @case(1)
                                            Guilty
                                        @break

                                        @case(2)
                                            Not-Guilty. Courtdate:
                                            @if ($ticket->court_at)
                                                {{ $ticket->court_at->format('m/d/Y') }}
                                            @else
                                                Contact court directly
                                            @endif
                                        @break

                                        @default
                                    @endswitch

                                </span>
                            </a>
                        </div>
                        <hr>
                        @empty
                            <p class="">No Charges</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    @endsection
