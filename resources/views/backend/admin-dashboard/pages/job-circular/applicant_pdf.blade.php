<div style="margin-left: 50px; margin-top: 50px;">
    <div>
        <div style="margin-bottom: 20px">
            <!-- Displaying Image -->
            <img src="{{ public_path('storage/' . $job_applicant->photo) }}" alt="Intern Photo"
                style="max-width: 150px; height: auto;">
        </div>
        <div style="margin-bottom: 20px">
            <strong>Name:</strong> {{ $job_applicant->name }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Phone:</strong> {{ $job_applicant->phone }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Email:</strong> {{ $job_applicant->email }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Educational Qualification:</strong> {{ $job_applicant->educational_qualification }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Special Skills:</strong> {{ $job_applicant->special_skills }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Employment Status:</strong> {{ $job_applicant->employment_status }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Expected Salary:</strong> {{ $job_applicant->expected_salary }}
        </div>

        <!-- Adding new questions -->
        <div style="margin-bottom: 20px">
            <strong>Question 1:</strong> {{ $job_applicant->q1 }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Question 2:</strong> {{ $job_applicant->q2 }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Question 3:</strong> {{ $job_applicant->q3 }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Question 4:</strong> {{ $job_applicant->q4 }}
        </div>

        <div style="margin-bottom: 20px">
            <strong>CV:</strong>
            <a href="{{ public_path('storage/' . $job_applicant->cv) }}" target="_blank">Download</a>
        </div>
    </div>
</div>
