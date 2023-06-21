@component('mail::message')
    {{-- <h3>New Message from {{$contact_form_data['email']}}</h3>

    <p>Name: {{$contact_form_data['name']}}</p>

    <p>Message: {{$contact_form_data['message']}}</p> --}}


    <table>
        <th>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Message</td>
            </tr>
        </th>
        <tr>
            <td>{{ $name }}</td>
            <td>{{ $email }}</td>
            <td>{{ $message }}</td>
        </tr>
    </table>
@endcomponent
