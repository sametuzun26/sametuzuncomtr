---
name: Obsidian Nexus
colors:
  surface: '#0f131c'
  surface-dim: '#0f131c'
  surface-bright: '#353942'
  surface-container-lowest: '#0a0e16'
  surface-container-low: '#181c24'
  surface-container: '#1c2028'
  surface-container-high: '#262a33'
  surface-container-highest: '#31353e'
  on-surface: '#dfe2ee'
  on-surface-variant: '#bcc9cd'
  inverse-surface: '#dfe2ee'
  inverse-on-surface: '#2c3039'
  outline: '#869397'
  outline-variant: '#3d494c'
  surface-tint: '#4cd7f6'
  primary: '#4cd7f6'
  on-primary: '#003640'
  primary-container: '#06b6d4'
  on-primary-container: '#00424f'
  inverse-primary: '#00687a'
  secondary: '#c0c1ff'
  on-secondary: '#1000a9'
  secondary-container: '#3131c0'
  on-secondary-container: '#b0b2ff'
  tertiary: '#4edea3'
  on-tertiary: '#003824'
  tertiary-container: '#1bbd85'
  on-tertiary-container: '#00452e'
  error: '#ffb4ab'
  on-error: '#690005'
  error-container: '#93000a'
  on-error-container: '#ffdad6'
  primary-fixed: '#acedff'
  primary-fixed-dim: '#4cd7f6'
  on-primary-fixed: '#001f26'
  on-primary-fixed-variant: '#004e5c'
  secondary-fixed: '#e1e0ff'
  secondary-fixed-dim: '#c0c1ff'
  on-secondary-fixed: '#07006c'
  on-secondary-fixed-variant: '#2f2ebe'
  tertiary-fixed: '#6ffbbe'
  tertiary-fixed-dim: '#4edea3'
  on-tertiary-fixed: '#002113'
  on-tertiary-fixed-variant: '#005236'
  background: '#0f131c'
  on-background: '#dfe2ee'
  surface-variant: '#31353e'
typography:
  display-xl:
    fontFamily: Plus Jakarta Sans
    fontSize: 56px
    fontWeight: '800'
    lineHeight: 64px
    letterSpacing: -0.03em
  display-xl-mobile:
    fontFamily: Plus Jakarta Sans
    fontSize: 38px
    fontWeight: '800'
    lineHeight: 44px
    letterSpacing: -0.025em
  headline-lg:
    fontFamily: Plus Jakarta Sans
    fontSize: 36px
    fontWeight: '700'
    lineHeight: 44px
    letterSpacing: -0.02em
  headline-lg-mobile:
    fontFamily: Plus Jakarta Sans
    fontSize: 28px
    fontWeight: '700'
    lineHeight: 34px
    letterSpacing: -0.015em
  headline-md:
    fontFamily: Plus Jakarta Sans
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
    letterSpacing: -0.01em
  headline-sm:
    fontFamily: Plus Jakarta Sans
    fontSize: 20px
    fontWeight: '600'
    lineHeight: 28px
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Inter
    fontSize: 15px
    fontWeight: '400'
    lineHeight: 24px
  body-sm:
    fontFamily: Inter
    fontSize: 13px
    fontWeight: '400'
    lineHeight: 20px
  code-md:
    fontFamily: JetBrains Mono
    fontSize: 14px
    fontWeight: '500'
    lineHeight: 22px
  code-sm:
    fontFamily: JetBrains Mono
    fontSize: 12px
    fontWeight: '500'
    lineHeight: 18px
  label-caps:
    fontFamily: JetBrains Mono
    fontSize: 11px
    fontWeight: '600'
    lineHeight: 16px
    letterSpacing: 0.08em
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  gutter: 1.5rem
  gutter-mobile: 1rem
  margin: 4rem
  margin-mobile: 1.25rem
  space-xs: 0.25rem
  space-sm: 0.5rem
  space-md: 1rem
  space-lg: 1.5rem
  space-xl: 2.5rem
  space-2xl: 4rem
---

## Brand & Style

This design system crafts an elite, high-conviction digital footprint for a premier software architect and full-stack engineer. The visual aesthetic fuses engineering precision, dark minimalism, and high-performance developer ergonomics.

- **Brand Personality**: Authoritative, mathematically sound, deeply technical, and exceptionally polished. It reflects craft, micro-optimization, and systemic thinking over superficial trends.
- **Target Audience**: CTOs, VP-level engineering leadership, venture-backed founders, and technical recruiters seeking top-decile architectural leadership and mission-critical execution.
- **Emotional Response**: Instinctual trust, technological mastery, cutting-edge competence, and zero operational friction.
- **Design Style**: Sleek Technical Modernism with subtle frosted depth, ultra-crisp hairline borders, terminal metaphors, and luminous cybernetic accents (cyan, violet, emerald).

## Colors

The palette operates in strict dark space, using light purely as energy and precision feedback.

- **Background Foundations**:
  - Root Canvas: `#0B0F17` (Deep Obsidian Void).
  - Layer 1 Container (Cards, Panels): `#111827` (Muted Slate Surface).
  - Layer 2 Popover/Terminal Header: `#1E293B` (Elevated Deep Slate).
- **Hairlines & Dividers**:
  - Subdued Borders: `#1F2937` (Structural edge definition).
  - Active/Hover Stroke: `#374151` (Tactile feedback border).
- **Signal Accents**:
  - Primary (`#06B6D4` - Electric Cyan): Main interactive cues, execution triggers, live status indicators, active primary links.
  - Secondary (`#6366F1` - Hyper Violet): Architectural diagrams, structural workflow connectors, specialty badges.
  - Tertiary (`#10B981` - Kinetic Emerald): Metric proofs, production-ready green lights, uptime validation, successful CLI state.
- **Type Scale Neutrality**:
  - High-Contrast Primary Type: `#F9FAFB` (Off-White, maximum legibility).
  - Muted Technical Secondary: `#9CA3AF` (Documentation gray).
  - Low-Priority De-emphasized: `#4B5563` (Metadata, code line numbers).

## Typography

The typographic hierarchy bridges modern editorial poise with terminal-grade precision.

- **Headline Roles (`Plus Jakarta Sans`)**: Delivers geometric structure, modern authority, and crisp rendering at display sizes. Tight letter spacing prevents sprawl and gives copy a unified, sculpted weight.
- **Body & Longform (`Inter`)**: Chosen for its immaculate screen legibility, neutral cadence, and neutral vertical alignment across complex layouts.
- **Code, Metrics & Badges (`JetBrains Mono`)**: Injects authentic developer heritage. Used exclusively for numerical proofs, tech stack parameters, terminal inputs/outputs, and categorized status flags.
- **Responsive Handling**: Display and Headline-Lg scale down aggressively via dedicated mobile tokens to maintain vertical rhythm on narrower viewports without awkward line breaks.

## Layout & Spacing

A disciplined 12-column responsive fluid grid governs the digital canvas with strict geometric vertical rhythm.

- **Grid Architecture**:
  - Desktop (≥1200px): 12 columns, max-width `1280px`, `1.5rem` (`24px`) gutters, `4rem` outer padding.
  - Tablet (768px - 1199px): 8 columns, `1.5rem` gutters, `2rem` outer padding.
  - Mobile (≤767px): 4 columns, `1rem` gutters, `1.25rem` outer canvas padding.
- **Rhythm & Structure**: Component spacing adheres to a strict 4px/8px base factor. Information dense layouts (terminal screens, telemetry dashboards) leverage `space-xs` and `space-sm`, whereas narrative proof points utilize `space-xl` through `space-2xl` to convey breathability and stature.

## Elevation & Depth

Depth is established via layered dark surfaces and ambient edge glows rather than traditional heavy drop shadows.

- **Layer 0 (Base)**: `#0B0F17` pure solid background with an optional faint geometric grid overlay (`rgba(255, 255, 255, 0.02)`).
- **Layer 1 (Card Level)**: Solid `#111827` or translucent `rgba(17, 24, 39, 0.85)` with a `12px` backdrop blur, delineated by a single `1px` stroke of `#1F2937`.
- **Layer 2 (Interactive Floating & Terminal Focus)**: Elevated container `#1E293B` bounded by `#374151` with an ambient glow: `0 8px 32px -8px rgba(6, 182, 212, 0.15)`.
- **Glow Accents**: High-priority interactive objects (e.g., active quote triggers, terminal prompt highlights) emit restrained cyan and violet edge blooms (`box-shadow: 0 0 16px -2px rgba(6, 182, 212, 0.35)`).

## Shapes

The interface balances sharp industrial hardware styling with tactile ergonomics:

- **Base Radius (`0.25rem` / `4px`)**: Applied to badges, terminal windows, code blocks, and micro tags to sustain technical rigor.
- **Card Radius (`0.5rem` / `8px`)**: Applied to portfolio cards, architectural step nodes, and modular panels.
- **Interactive Control Radius (`0.5rem` or full pill)**: Form inputs and buttons use `8px` rounded corners; category filter pills and live status indicators employ a continuous full pill contour (`9999px`) to distinguish actionable selectors from architectural containers.

## Components

- **Buttons & CTAs**:
  - *Primary Button*: `#06B6D4` fill with `#0B0F17` text (JetBrains Mono, bold), high contrast, with an ambient cyan hover bloom and subtle scale transition (`scale(1.02)`).
  - *Secondary Button*: `#111827` surface with a `1px` `#374151` border, `#F9FAFB` text, elevating on hover to `#1E293B` and border-cyan.
  - *Terminal Trigger Button*: Monospaced prompt style with a trailing blinking cursor effect (`> run quote_estimator_`).
- **Terminal Cards**:
  - Window frame featuring three retro dot controls (`#EF4444`, `#F59E0B`, `#10B981`) at `10px` diameter.
  - Monospaced typography with distinct syntax coloring: cyan commands, emerald outputs, violet parameter flags, and gray comments.
  - Inner copy action button at top-right with instant tooltip feedback.
- **Workflow Step Nodes**:
  - Sequential pipeline layout connected by `1px` dashed links (`#374151`).
  - Active nodes pulse with `#06B6D4` or `#6366F1` radial halos.
  - Numerical step identifiers rendered in `JetBrains Mono` label-caps.
- **Interactive Portfolio Filter Pills**:
  - Inactive: Frosted slate background `rgba(31, 41, 55, 0.5)` with muted gray text.
  - Active: Bordered by cyan `#06B6D4` with `rgba(6, 182, 212, 0.1)` luminous backfill and crisp white text.
- **Metrics Badges**:
  - Compact data pods featuring oversized JetBrains Mono stats (e.g., `99.99%`, `<12ms`, `$40M+`) in crisp white or emerald, crowned by micro uppercase subheaders in `#9CA3AF`.
- **Project Quote Modal**:
  - Modal overlay at `rgba(11, 15, 23, 0.85)` with `16px` backdrop-filter blur.
  - Structured modular form elements with crisp `#1F2937` bounding lines that glow cyan on focus.
  - Dynamic scope cost calculation rendered as a live terminal receipt before submission.
- **Inputs & Controls**:
  - Inputs feature dark slate `#111827` fill, `1px` `#1F2937` border, white text, and zero ambient outline, switching to `#06B6D4` hairline on `:focus-visible`.