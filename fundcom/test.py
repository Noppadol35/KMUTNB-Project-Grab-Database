<html >

<head >
    <link rel = "stylesheet" href = "https://pyscript.net/latest/pyscript.css" / >
    <script defer src = "https://pyscript.net/latest/pyscript.js" > </script >
    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel = "stylesheet"
        crossorigin = "anonymous" >
</head >

<body >
   <b >
        <p > Today is <u > <label id = 'today' > </label > </u > </p >
    </b >
    <br >
    <div id = "pi" class="alert alert-primary"></div>
    <py-script >
      import datetime as dt
       pyscript.write('today', dt.date.today().strftime('%A %B %d, %Y'))

        def compute_pi(n):
        pi = 2
        for i in range(1, n):
        pi *= 4 * i ** 2 / (4 * i ** 2 - 1)
        return pi

        pi = compute_pi(100000)
        pyscript.write('pi', f'π is approximately {pi:.3f}')
    </py-script >
</body >

</html >
