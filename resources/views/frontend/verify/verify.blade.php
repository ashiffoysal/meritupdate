@extends('layouts.frontend')
@section('title', 'Verify')
@section('content')

{{--
    <section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="#"><strong><span class="mdi mdi-home"></span> Home</strong></a> <span class="mdi mdi-chevron-right"></span> <a href="#">Register</a> <span class="mdi mdi-chevron-right"></span> <a href="#">Verify</a>
            </div>
        </div>
        </div>
    </section>
        <div class="container">
            <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-5 mt-10" style="padding-top: 6px;padding-bottom: 6px;">
                <div class="login-modal-center">
                    <div class="tab-content">
                    <div class="tab-pane active" id="login" role="tabpanel">
                            <form method="POST" action="{{ route('verify.code') }}"> 
                                @csrf
                                <input type="number" hidden value="{{$id}}" name="id">
                                <h5 class="heading-design-h5 text-center">Verify your account</h5>
                                <fieldset class="form-group col-mb-8">
                                    <label>Enter Code</label>
                                    <input type="text" class="form-control" name="code" placeholder="Enter Code">
                                </fieldset>
                                @error('code')
                                    <div class="validation">{{ $message }}</div>
                                @enderror
                                <fieldset class="form-group">
                                    <button type="submit" class="btn btn-lg btn-secondary btn-block">Submit  your Code</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
--}}


<style>


form {
  padding: 2rem;
  border-radius: 4px;
  box-shadow: 0 2px 4px rgba(0,0,0,.1);
  max-width: 400px;
  background: #fff;
  
  .form-control {
    display: block;
    height: 50px;
    margin-right: 0.5rem;
    text-align: center;
    font-size: 1.25rem;
    min-width: 0;
    
    &:last-child {
      margin-right: 0;
    }
  }
}
</style>
<div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2 style="color:#fff !important;">Verification</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">HOME</a>
                                </li>
                                <li>Verify</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
            <div class="col-md-6 mt-10" style="padding-top: 106px;padding-bottom: 66px;">
                <p>Please Check Your Email and Verify your Account.</p>
                <form method="POST" action="{{ route('verify.code') }}"> 
                                @csrf
                    <h4 class="text-center mb-4">Enter your code</h4>
                    <input type="number" hidden value="{{$id}}" name="id">
                    <div class="d-flex mb-3">
                        <input type="tel" name="first" maxlength="1" pattern="[0-9]" class="form-control">
                        <input type="tel"  name="second" maxlength="1" pattern="[0-9]" class="form-control">
                        <input type="tel"  name="third" maxlength="1" pattern="[0-9]" class="form-control">
                        <input type="tel"  name="forth" maxlength="1" pattern="[0-9]" class="form-control">
                        <input type="tel"  name="five" maxlength="1" pattern="[0-9]" class="form-control">
                        <input type="tel"  name="six" maxlength="1" pattern="[0-9]" class="form-control">
                    </div>
                    <button type="submit" class="w-100 btn btn-primary">Verify account</button>
                </form>

            </div>
        </div>
    </div>
</div>
<script>
   const form = document.querySelector('form')
const inputs = form.querySelectorAll('input')
const KEYBOARDS = {
  backspace: 8,
  arrowLeft: 37,
  arrowRight: 39,
}

function handleInput(e) {
  const input = e.target
  const nextInput = input.nextElementSibling
  if (nextInput && input.value) {
    nextInput.focus()
    if (nextInput.value) {
      nextInput.select()
    }
  }
}

function handlePaste(e) {
  e.preventDefault()
  const paste = e.clipboardData.getData('text')
  inputs.forEach((input, i) => {
    input.value = paste[i] || ''
  })
}

function handleBackspace(e) { 
  const input = e.target
  if (input.value) {
    input.value = ''
    return
  }
  
  input.previousElementSibling.focus()
}

function handleArrowLeft(e) {
  const previousInput = e.target.previousElementSibling
  if (!previousInput) return
  previousInput.focus()
}

function handleArrowRight(e) {
  const nextInput = e.target.nextElementSibling
  if (!nextInput) return
  nextInput.focus()
}

form.addEventListener('input', handleInput)
inputs[0].addEventListener('paste', handlePaste)

inputs.forEach(input => {
  input.addEventListener('focus', e => {
    setTimeout(() => {
      e.target.select()
    }, 0)
  })
  
  input.addEventListener('keydown', e => {
    switch(e.keyCode) {
      case KEYBOARDS.backspace:
        handleBackspace(e)
        break
      case KEYBOARDS.arrowLeft:
        handleArrowLeft(e)
        break
      case KEYBOARDS.arrowRight:
        handleArrowRight(e)
        break
      default:  
    }
  })
})

</script>
@endsection