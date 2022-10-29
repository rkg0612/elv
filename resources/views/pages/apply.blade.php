@extends('layout.main')
@section('content')
<div class="position-relative overflow-hidden p-3 p-md-5 text-start bg-light">
    <div class="col-md-12 p-lg-5 my-5">
        <h1 class="display-4 fw-normal">ELV Agency Application Membership?</h1>
        <p class="lead fw-normal">
            Based on the information you provide; our selection committee will evaluate your initial application for membership. Expect a response to your submission within 2 business days.
        </p>
        <p class="lead fw-normal">
            To apply, you must meet the following minimum qualifications:
        </p>
        <ul>
            <li>Senior Level Executive</li>
            <li>Your business generates a minimum of $500,000 USD in revenue, or…</li>
            <li>Your business has a minimum of $1M USD in financing.</li>
        </ul>
        <p class="lead fw-normal">
            If you meet our requirements and would like to apply, please fill out the information below. Information you provide will ONLY be shared with our internal membership-selection committee. Please note: meeting the criteria listed above does not guarantee acceptance.
        </p>
        <p class="lead fw-normal">
            If accepted, you will be granted exclusivity to your business category within your city/geo-market.
        </p>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <hr class="my-4">
                <h4 class="mb-3">Personal Information</h4>
                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">First name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Last name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">
                    <h4 class="mb-3">Contact Information</h4>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid email is required.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="cell" class="form-label">Cell Phone<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="cell" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid cell phone number is required.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="business" class="form-label">Business Phone<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="business" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid business phone number is required.
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">
                    <h4 class="mb-3">Please Complete Where Applicable</h4>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="twitter" class="form-label">Twitter Handle</label>
                            <input type="text" class="form-control" id="twitter" placeholder="" value="">
                        </div>
                        <div class="col-sm-6">
                            <label for="linkedin" class="form-label">LinkedIn URL</label>
                            <input type="text" class="form-control" id="linkedin" placeholder="" value="">
                        </div>
                        <div class="col-sm-6">
                            <label for="facebook" class="form-label">Facebook Page</label>
                            <input type="text" class="form-control" id="facebook" placeholder="" value="">
                        </div>
                        <div class="col-sm-6">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input type="text" class="form-control" id="instagram" placeholder="" value="">
                        </div>
                        <div class="col-sm-6">
                            <label for="pinterest" class="form-label">Pinterest</label>
                            <input type="text" class="form-control" id="pinterest" placeholder="" value="">
                        </div>
                    </div>

                    <hr class="my-4">
                    <h4 class="mb-3">Business Information</h4>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="companyname" class="form-label">Company Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="companyname" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Company name is required.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="companywebsite" class="form-label">Company Website<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="companywebsite" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Company website is required.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="jobtitle" class="form-label">Job Title/Position at Company<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="jobtitle" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Job title is required.
                            </div>
                            <small class="text-warning">You must be a senior-level executive at your current company to qualify for membership.</small>
                        </div>
                        <div class="col-sm-6">
                            <label for="companyaddress" class="form-label">Company Address<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="companyaddress" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Company address is required.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="employeenumber" class="form-label">Total Number of Employees<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="employeenumber" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Employee number is required.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="revenue" class="form-label">Last 12 Months of Revenue<span class="text-danger">*</span></label>
                            <select name="revenue" id="revenue" class="form-control">
                                <option value="" disabled selected>--Please Select--</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="funding" class="form-label">Funding Acquired Since Inception<span class="text-danger">*</span></label>
                            <select name="funding" id="funding" class="form-control">
                                <option value="" disabled selected>--Please Select--</option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <label for="reason" class="form-label">Tell us why you should be considered for this exclusive membership<span class="text-danger">*</span></label>
                            <textarea name="" id="reason" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <small class="text-muted font-italic">ELV Agency needs the contact information you provide to us to contact you about our benefits and services, and to ensure you qualify. You may unsubscribe from these communications anytime. For information on how to unsubscribe, as well as our privacy practices and commitment to protecting your privacy, check out our Privacy Policy.</small>
                        </div>
                        <div class="col-sm-12">
                            <small class="text-muted font-italic">By submitting your information you agree to our User Agreement and Privacy Policy.</small>
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-outline-secondary btn-lg" type="button">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection