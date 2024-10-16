<div style="margin-left: 50px; margin-top:50px;">
    <div>
        <div style="margin-bottom: 20px">
            <!-- Displaying Image -->
            <img src="{{ public_path('storage/' . $internApplication->photo) }}" alt="Intern Photo"
                style="max-width: 150px; height: auto;">
        </div>
        <div style="margin-bottom: 20px">
            <strong>Name:</strong> {{ $internApplication->name }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Email:</strong> {{ $internApplication->email }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Phone Number:</strong> {{ $internApplication->phone_number }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Education:</strong> {{ $internApplication->education }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Skills:</strong> {{ $internApplication->skills }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Q1:</strong> How can you use your skills to solve problems in agriculture? <br>
            <strong>Ans:</strong> {{ $internApplication->q1 }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Q2:</strong> How can you help BDKrishi succeed? <br> <strong>Ans:</strong>
            {{ $internApplication->q2 }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Q3:</strong> What are your career goals, and how can BDKrishi help you achieve them? <br>
            <strong>Ans:</strong> {{ $internApplication->q3 }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Q4:</strong> Tell us about your past projects and their impact. <br> <strong>Ans:</strong>
            {{ $internApplication->q4 }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Resume:</strong>
            <a href="{{ public_path('storage/' . $internApplication->resume) }}" target="_blank">Download</a>
        </div>
    </div>
</div>
