<div class="modal fade" id="contactFormModal" tabindex="-1" aria-labelledby="contactFormModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-lg">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="contactFormModalLabel">
                    <i data-feather="phone-call" class="me-1"></i>
                    Add Follow-up
                </h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>

            <form id="followUpForm" method="POST">

                @csrf

                <input type="hidden" name="lead_id" value="{{ encrypt($lead->id) }}">
                <input type="hidden" name="operator_id" value="{{ session('user_id') }}">

                <div class="modal-body">

                    <div class="row g-3">

                        <!-- Customer Name -->
                        <div class="col-md-6">
                            <label class="form-label">Customer Name</label>

                            <input type="text" class="form-control" value="{{ $lead->customer_name ?? '' }}"
                                readonly>
                        </div>

                        <!-- Mobile Number -->
                        <div class="col-md-6">
                            <label class="form-label">Mobile Number</label>

                            <input type="text" class="form-control" value="{{ $lead->mobile ?? '' }}" readonly>
                        </div>

                        <!-- Follow-up Date -->
                        <div class="col-md-6">

                            <label class="form-label">
                                Follow-up Date
                                <span class="text-danger">*</span>
                            </label>

                            <input type="date" class="form-control" name="followup_date" value="{{ date('Y-m-d') }}"
                                required>

                        </div>

                        <!-- Next Follow-up Required -->
                        <div class="col-md-6">

                            <label class="form-label">
                                Next Follow-up Required
                                <span class="text-danger">*</span>
                            </label>

                            <select class="form-select" name="next_followup_required" id="nextFollowupRequired"
                                required>

                                <option value="">Select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>

                            </select>

                        </div>

                        <!-- Next Follow-up Date -->
                        <div class="col-md-6 next-followup-field" style="display:none;">

                            <label class="form-label">
                                Next Follow-up Date
                                <span class="text-danger">*</span>
                            </label>

                            <input type="date" class="form-control" name="next_followup_date" id="nextFollowupDate"
                                min="{{ date('Y-m-d') }}">

                        </div>

                        <!-- Next Action -->
                        <div class="col-md-6 next-followup-field" style="display:none;">

                            <label class="form-label">
                                Next Action
                                <span class="text-danger">*</span>
                            </label>

                            <select class="form-select" name="followup_type" id="nextAction">

                                <option value="">Select Next Action</option>
                                <option value="Call">Call</option>
                                <option value="Meeting">Meeting</option>
                                <option value="Site Visit">Site Visit</option>
                                <option value="Re-visit">Re-visit</option>
                                <option value="Offer Discussion">Offer Discussion</option>
                                <option value="Payment Discussion">Payment Discussion</option>
                                <option value="Paperwork">Paperwork</option>
                                <option value="Registry">Registry</option>
                                <option value="Other">Other</option>

                            </select>

                        </div>

                        <!-- Lead Stage -->
                        <div class="col-md-6">

                            <label class="form-label">
                                Lead Stage
                                <span class="text-danger">*</span>
                            </label>

                            <select class="form-select" name="lead_stage_id" required>

                                <option value="">Select Lead Stage</option>

                                @foreach ($leadStages as $stage)
                                    <option value="{{ $stage->id }}"
                                        {{ ($lead->lead_stage_id ?? '') == $stage->id ? 'selected' : '' }}>

                                        {{ $stage->stage_name }}

                                    </option>
                                @endforeach

                            </select>

                        </div>

                        <!-- Remark -->
                        <div class="col-12">

                            <label class="form-label">
                                Discussion / Remark
                                <span class="text-danger">*</span>
                            </label>

                            <textarea class="form-control" name="remarks" rows="4" placeholder="Enter follow-up discussion or remark..."
                                required></textarea>

                        </div>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <button type="submit" id="saveFollowUpBtn" class="btn btn-primary">

                        <i data-feather="save" class="me-1"></i>
                        Save Follow-up

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>
